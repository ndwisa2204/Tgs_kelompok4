<?php

namespace App\Controllers;
use App\Models\PemesananModel;

class PemesananControllers extends BaseController
{
    public function index()
    {
        if(!session()->has('username')){
			return redirect()->to('/');
		}
        $data["data"]="Ini Data";
        return view("pemesanan_data",$data);
    }
}
