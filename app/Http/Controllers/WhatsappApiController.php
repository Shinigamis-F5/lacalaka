<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;
use App\Models\User;

class WhatsappApiController extends Controller
{
    public static function sendMsg(Party $party)
    {
        $apiKey = env('NEXMO_API_KEY');
        $apiSecret = env('NEXMO_API_SECRET');
        $apiNumber = env('NEXMO_NUMBER');

        $partyVenue = User::find($party->user_id);
        $number = 34611086304; // $partyVenue->phone;
        $msg = "You just cancelled a party ($party->title) that you announced on https://lacalaka.party/party/$party->id";

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
    }
}
