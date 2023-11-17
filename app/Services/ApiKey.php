<?php
namespace App\Services;

use App\Models\ApiKey as ApiKeyModal;
use Illuminate\Support\Str;

class ApiKey
{
    public static function generate()
    {
        $apiKey = Str::random(32);

        return ApiKeyModal::create([
            'key' => $apiKey,
        ]);

    }

    public static function validate($key)
    {
        $apiRecord = ApiKeyModal::where('key', $key)->first();

        if ($apiRecord) {
            return true;
        }

        return false;

    }
}
