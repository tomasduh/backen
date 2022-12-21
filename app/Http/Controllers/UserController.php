<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index(Request $request){
        $response = Http::get('https://test.conectadosweb.com.co/users/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJ0ZXN0IjozMjE0MTIsInVzZXIiOiJmM3IyIn0NcPLPRLSvfszQwtxZLyypsm3Y56ELRdppqYXDv2Hagk');
        $data = $response->json();
        $token = $request->token;

        //validacion de token
        if($request->token !== "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJ0ZXN0IjozMjE0MTIsInVzZXIiOiJmM3IyIn0NcPLPRLSvfszQwtxZLyypsm3Y56ELRdppqYXDv2Hagk"){
            return response('Token incorrecto', 401);
        }
        return view('users.index', compact('data', 'token'));

    }

    public function transaction(Request $request){
        $token = $request->token;
        $userId = $request->client_id;

        $response = Http::get('https://test.conectadosweb.com.co/users/'.$token.'/transaction/'.$userId);
        $data = $response->json();
        if($data==[]){
            return view('users.error');
        }
        return view('users.transaction', compact('data'));
    }

    public function userDetail(Request $request){
        $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJ0ZXN0IjozMjE0MTIsInVzZXIiOiJmM3IyIn0NcPLPRLSvfszQwtxZLyypsm3Y56ELRdppqYXDv2Hagk';
        $userId = $request->id;
        $response = Http::get('https://test.conectadosweb.com.co/users/'.$token);
        $userInfo = $response[$userId];
        $data  = Http::get('https://test.conectadosweb.com.co/users/'.$token.'/transaction/'.$userInfo['id']);
        $transactions= $data->json();

        return view('users.detail', compact('userInfo', 'transactions'));
        // return([$userInfo, $transactions]);
    }   
}