<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table = 'Pembeli';

    protected $fillable = array ('pembeli_no_ktp', 'pembeli_nama', 'pembeli_alamat', 'pembeli_telepon', 'pembeli_hp');

    public function beli_kridit(){
        return $this->belongTo('App\Pembeli', 'pembeli_no_ktp');
    }
}
