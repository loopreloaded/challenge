<?php

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class WeatherManager extends Model
{
    /** returns weather information
     * @param string $city Name of the city
     * @return Weather
     */
    public static function getCurrent(string $city)
    {
        $hour = Carbon::now()->hour;
        $current = Weather::where('city',"$city")->first();

        if (!($current && $current->updated_at->hour == $hour)) {
            $apiWeather = new ApiWeatherStack();
            $current = (array)$apiWeather->getCurrent($city);
            $current['weather_icons'] = json_encode($current['weather_icons']);
            $current['weather_descriptions'] = json_encode($current['weather_descriptions']);

            $newWeather = Weather::updateOrCreate(['city' => $city], $current);
            $current = $newWeather;
        }

        return $current;
    }

}
