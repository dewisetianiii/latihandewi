<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bayar_cicilan extends Model
{
    protected $table = 'Bayar_cicilan';

    protected $fillable = array ('cicilan_kode', 'kridit_kode', 'cicilan_tanggal', 'cicilan_jumlah', 'cicilan_ke', 'cicilan_sisa_ke', 'cicilan_sisa_harga');

    public function beli_kridit(){
        return $this->hasMany('App\Beli_kridit', 'kridit_kode');
    }
}
