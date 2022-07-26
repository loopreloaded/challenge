<?php

namespace App\Http\Middleware;

use App\Models\ApiKey;
use Closure;
use Illuminate\Http\Request;

class AccessCheck
{
    public function handle(Request $request, Closure $next)
    {
        $apiKey = ApiKey::whereRaw("BINARY `api_key`= ?",[$request->api_key])->first();
        if (!$apiKey) return response()->json(['error' => config('errors_messages.invalid_api_key')],401);
        return $next($request);
    }
}
