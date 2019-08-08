<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beli_kridit extends Model
{
    protected $table = 'Beli_kridit';

    protected $fillable = array ('kridit_kode', 'pembeli_no_ktp', 'paket_kode', 'motor_kode', 'kridit_tanggal', 'fotokopi_ktp', 'fotokopi_kk', 'fotokopi_slip_gaji');

    public function bayar_cicilan(){
        return $this->belongTo('App\Bayar_cicilan', 'kridit_kode');
    }
    public function pembeli(){
        return $this->hasMany('App\Pembeli', 'pembeli_no_ktp');
    }
    public function kridit_paket(){
        return $this->hasMany('App\Kridit_paket', 'paket_kode');
    }
    public function motor(){
        return $this->hasMany('App\Motor', 'motor_kode');
    }
}
