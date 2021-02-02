<?php

namespace App\Http\Controllers;

use Dotenv\Dotenv;
use Illuminate\Support\Env;
use Illuminate\Http\Request;

class WhatsappApiController extends Controller
{
    public static function sendMsg()
    {
        $number = 34611086304;
        $apiKey = env('NEXMO_API_KEY');
        $apiSecret = env('NEXMO_API_SECRET');
        $apiNumber = env('NEXMO_NUMBER');
        $msg = "how u doinaaaaaaaaaaaaaaaaa mate";

        $params = [
            "to" => ["type" => "whatsapp", "number" => "$number"],
            "from" => ["type" => "whatsapp", "number" => "$apiNumber"],
            "message" => [
                "content" => [
                    "type" => "text",
                    "text" => $msg
                ]
            ]
        ];

        $client = new \GuzzleHttp\Client();
        $url = "https://messages-sandbox.nexmo.com/v0.1/messages";

        $headers = ["Authorization" => "Basic " . base64_encode("$apiKey:$apiSecret")];
        $response = $client->request('POST', $url, ["headers" => $headers, "json" => $params]);
        $data = $response->getBody();

        return back();
    }
}