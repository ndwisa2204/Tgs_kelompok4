<?php namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table = "pemesanan";
    protected $primaryKey = 'id_pesanan';

    public function getData(){
        $pemesanan = new PemesananModel();
        $dPemesesanan = $pemesanan->findAll();
        return $dPemesesanan;
    }
}