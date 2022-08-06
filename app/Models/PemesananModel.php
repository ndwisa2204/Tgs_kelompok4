<?php namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table = "pemesanan";
    protected $primaryKey = 'id_pesanan';

    public function getData(){
        $pemesanan = new PemesananModel();
        $pemesanan->join("barang","barang.id_barang=pemesanan.id_barang")
                ->select("pemesanan.*,barang.nama_barang");
        $dPemesesanan = $pemesanan->findAll();
        return $dPemesesanan;
    }
}