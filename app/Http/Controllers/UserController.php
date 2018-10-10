<?php

namespace App\Http\Controllers;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    public function index()
    {
        $user = New User();
        $user->name = 'Esmeralda';
        $user->email = 'esmeralda@correo.com';
        // $user->password = '123';
        
        return response()->json($user,200);
    }
}
