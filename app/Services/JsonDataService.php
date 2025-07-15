<?php
namespace App\Services;

use Illuminate\Support\Facades\Storage;

class JsonDataService
{
    public static function get($filename)
    {
        $path = "data/{$filename}.json";

        if (!Storage::exists($path)) {
            return collect(); // or throw an exception
        }

        $content = Storage::get($path);
        return collect(json_decode($content, true));
    }
}
