<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WeatherResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "observation_time"  =>  $this->observation_time,
            "temperature"       =>  $this->temperature,
            "weather_code"      =>  $this->weather_code,
            "weather_icons"     => $this->weather_icons(),
            "weather_descriptions" => $this->weather_descriptions(),
            "wind_speed" =>  $this->wind_speed,
            "wind_degree"=>  $this->wind_degree,
            "wind_dir"   =>  $this->wind_dir,
            "pressure"   =>  $this->pressure,
            "precip"     =>  $this->precip,
            "humidity"   =>  $this->humidity,
            "cloudcover" =>  $this->cloudcover,
            "feelslike"  =>  $this->feelslike,
            "uv_index"   =>  $this->uv_index,
            "visibility" =>  $this->visibility,
            "is_day"     =>  $this->is_day
        ];
    }

    private function weather_icons(){
        return json_decode($this->weather_icons);
    }

    private function weather_descriptions(){
        return json_decode($this->weather_descriptions);
    }
}
