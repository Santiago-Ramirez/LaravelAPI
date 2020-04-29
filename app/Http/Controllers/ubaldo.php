<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;

class ubaldo extends Controller
{
    public function remedial()
    {
        $client = new \GuzzleHttp\Client();
        $tokenbetter = '7674cc1f1998dca21360fcc2ef07f5b7';
        $response = $client->request('GET','https://api.betterdoctor.com/2016-03-01/practices?location=37.773%2C-122.413%2C100&user_location=37.773%2C-122.413&skip=0&limit=10&user_key='.$tokenbetter);
        $ubaldo = json_decode($response->getBody());
        return response()->json(["prueba"=>$ubaldo],200);
    }

    
    public function remedia()
    {
        $client = new \GuzzleHttp\Client();
        $tokenbetter = '7674cc1f1998dca21360fcc2ef07f5b7';
        $response = $client->request('GET','https://api.betterdoctor.com/2016-03-01/specialties?user_key='.$tokenbetter);
        $ubaldo = json_decode($response->getBody());
        return response()->json(["prueba"=>$ubaldo],200);
    }

    public function remedi()
    {
        $client = new \GuzzleHttp\Client();
        $tokenbetter = '7674cc1f1998dca21360fcc2ef07f5b7';
        $response = $client->request('GET','https://api.betterdoctor.com/2016-03-01/insurances?user_key='.$tokenbetter);
        $ubaldo = json_decode($response->getBody());
        return response()->json(["prueba"=>$ubaldo],200);
    }

    public function remed()
    {
        $client = new \GuzzleHttp\Client();
        $tokenbetter = '7674cc1f1998dca21360fcc2ef07f5b7';
        $response = $client->request('GET','https://api.betterdoctor.com/2016-03-01/info?user_key='.$tokenbetter);
        $ubaldo = json_decode($response->getBody());
        return response()->json(["prueba"=>$ubaldo],200);
    }

    public function reme()
    {
        $client = new \GuzzleHttp\Client();
        $tokenbetter = '7674cc1f1998dca21360fcc2ef07f5b7';
        $response = $client->request('GET','https://api.betterdoctor.com/2016-03-01/conditions?user_key='.$tokenbetter);
        $ubaldo = json_decode($response->getBody());
        return response()->json(["prueba"=>$ubaldo],200);
    }

    public function create(Request $request)
    {
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password']
        ]);
        return response()->json(['Usuario' => $user], 201);
    }

    
    public function generateToken(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        $token = Str::random(60);
        $user->forceFill([
            'api_token' => hash('sha256', $token),
        ])->save();
        return ['token' => $token];
    }

    public function generarToken($id)
    {
  
        $user = User::find($id);
        $token = Str::random(60);

        $user->forceFill([
            'api_token' => hash('sha256', $token),
        ])->save();

        return ['token' => $token];
    }
    
}
