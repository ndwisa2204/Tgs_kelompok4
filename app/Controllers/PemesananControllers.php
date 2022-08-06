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
        $PemesananModel = new PemesananModel();
        $dPemasanan=$PemesananModel->getData();
        $data["data"]=$dPemasanan;
        return view("pemesanan_data",$data);
    }
}
