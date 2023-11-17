<?php

namespace App\Console\Commands;

use App\Services\ApiKey;
use Illuminate\Console\Command;

class GenerateApiKey extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'apikey:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates api keys';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $apiKey = ApiKey::generate();

        $this->table(
            ['id', 'user_id', 'key', 'created_at'],
            [
                [
                    'id' => $apiKey->id,
                    'user_id' => $apiKey->user_id,
                    'key' => $apiKey->key,
                    'created_at' => $apiKey->created_at,
                ],
            ]
        );

    }
}
