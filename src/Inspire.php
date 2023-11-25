<?php

namespace Kenura\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire
{
    public function single()
    {
        $response = Http::get('https://type.fit/api/quotes');

        $responseArray = json_decode($response);

        $key = array_rand($responseArray, 1);

        return $response[$key];
    }

    public function multiple(int $count)
    {
        $response = Http::get('https://type.fit/api/quotes');

        $responseArray = json_decode($response);

        $keys = array_rand($responseArray, $count);

        $output = [];

        foreach ($keys as $responseKey) {

            $output[] = $responseArray[$responseKey];
        }

        return $output;
    }
}