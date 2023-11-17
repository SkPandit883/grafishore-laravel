<?php

namespace App\Http\Middleware;

use App\Services\ApiKey;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyApiKeyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $apiKey = $request->header('X-API-KEY');
        if (!ApiKey::validate($apiKey)) {
            return response()->json(['status' => 'error', 'error' => 'invalid API key'], 403);
        }

        return $next($request);
    }
}
