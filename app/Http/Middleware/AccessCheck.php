<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AccessCheck
{
    public function handle(Request $request, Closure $next)
    {
        $apiKey = trim($request->api_key);
        if (!$apiKey) return response()->json(['Unauthorized'],401);
        if ($apiKey != config('security.api_key')) return response()->json(['invalid api key'],401);
        return $next($request);
    }
}
