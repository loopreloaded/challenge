<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeatherRequest;
use App\Models\ApiWeather;

class WeatherController extends Controller
{
    public function getCurrent(WeatherRequest $request)
    {
        $apiWeather = new ApiWeather();

        return $apiWeather->getCurrent($request->input('query'));
    }
}
