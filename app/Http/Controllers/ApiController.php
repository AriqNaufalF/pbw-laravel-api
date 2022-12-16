<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function memanggilAPI()
    {
        $token = "2|gcYt3csQIGrFPf1yPgWpFCvQsKGnrSDRsgjMGKlT";
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $token
        ])->get('http://pbw-laravel-api.test/api/getAllUsersToo');

        $jsonData = $response->json();

        return response()->json($jsonData, $response->getStatusCode());
    }
}
