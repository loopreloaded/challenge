<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeatherRequest;
use App\Http\Resources\WeatherResource;
use App\Models\WeatherManager;

class WeatherController extends Controller
{
    public function getCurrent(WeatherRequest $request)
    {
        $query = trim($request->input('query'));

        try {
            $current = WeatherManager::getCurrent($query);
        } catch (\Exception $e) {
            return response()->json(['error'=> config('errors_messages.error')]);
        }

        return new WeatherResource($current);

    }
}
