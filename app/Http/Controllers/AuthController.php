<?php
namespace App\Http\Controllers;

class AuthController extends Controller
{

    /**
     * AuthController constructor.
     */
    public function __construct()
    {
    }

    public function login()
    {
        return view('index.login');
    }
    
    public function register()
    {
        return view('index.register');
    }
}
