<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kridit_paket extends Model
{
    protected $table = 'Kridit_paket';

    protected $fillable = array ('paket_kode', 'paket_harga_cash', 'paket_uang_muka', 'paket_jumlah_cicilan', 'paket_bunga', 'paket_nilai_cicilan');

    public function beli_kridit(){
        return $this->belongTo('App\Kridit_paket', 'paket_kode');
    }
}
