<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home_view');
        // return view('welcome_message');
    }
}
