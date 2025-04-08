<?php


namespace App\Services;

use Illuminate\Support\Facades\Http;

class DummyJsonService
{
    public function fetchIphones()
    {
        $response = Http::get('https://dummyjson.com/products/search?q=iphone');

        if ($response->successful()) {
            return $response->json()['products'] ?? [];
        }

        return [];
    }
}
