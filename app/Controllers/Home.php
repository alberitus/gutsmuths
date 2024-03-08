<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
    
    public function landing(): string
    {
        return view('landing');
    }
    
    public function login(): string
    {
        return view('auth/login');
    }

    public function regis(): string
    {
        return view('auth/register');
    }

    public function preRegis(): string
    {
        $data =[
        'vaidation' => \Config\Services::validation()
        ];
        return view('praRegis', $data);
    }
}
