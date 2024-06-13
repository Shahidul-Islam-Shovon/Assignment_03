<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){

        $name = "Donal Trump";
        $age  = "75";

        $data = [
            'id'   => $id,
            'name' => $name,
            'age'  => $age,
        ];

        // Set cookie variables
        $name = 'access_token';
        $value = '123-XYZ';
        $minutes = 1;
        $path = '/hello';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Create the cookie
        $cookie = cookie(
            $name,
            $value,
            $minutes,
            $path,
            $domain,
            $secure,
            $httpOnly
        );

        return response()->json($data, 200)->cookie($cookie);

    }
}
