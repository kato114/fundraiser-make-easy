<?php
namespace App\Http\Controllers;

class IndexController extends Controller
{

    /**
     * IndexController constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        return view('index.index');
    }

    public function login()
    {
        return view('index.login');
    }
    
    public function register()
    {
        return view('index.register');
    }

    public function about()
    {
        return view('index.about');
    }

    public function program()
    {
        return view('index.program');
    }

    public function contact()
    {
        return view('index.contact');
    }
}
