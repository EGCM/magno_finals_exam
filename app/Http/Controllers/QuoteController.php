<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuoteController extends Controller
{
    public function getQuote() {
        $response = Http::get('https://api.quotable.io/random');

        return json_decode($response->getBody(), true);
    }
}
