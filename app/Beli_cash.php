<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beli_cash extends Model
{
    protected $table = 'Beli_cash';

    protected $fillable = array ('cash_kode', 'pembeli_no_ktp', 'motor_kode', 'cash_tanggal', 'cash_bayar');

    public function Pembeli(){
        return $this->belongTo('App\Pembeli', 'cash_kode');
    }

}
