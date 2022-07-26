<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;

class ApiWeatherStack
{
    private $httpClient;

    public function __construct()
    {
        $headers = [
            'Accept' => 'application/json',
        ];

        $this->httpClient =  Http::baseUrl(\config('weather_stack.url_base'))->withHeaders($headers);
    }

    public function getCurrent(string $city)
    {
        $aSend = [
            'access_key' => config('weather_stack.access_key'),
            'query'      => $city
        ];

        return $this->httpClient->get('current',$aSend)->json('current');
    }
}
