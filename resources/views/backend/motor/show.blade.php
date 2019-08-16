@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Motor</div>
                <div class="card-body">
    <div class="form-group">
        <label for="">Kode Motor</label>
        <input class="form-control" value="{{ $motor->motor_kode }}" type="text" name="motor_kode" disabled>
    </div>
    <div class="form-group">
        <label for="">Merk Motor</label>
        <input class="form-control" value="{{ $motor->motor_merk }}" type="text" name="motor_merk" disabled>
    </div>
    <div class="form-group">
        <label for="">Kode type</label>
        <input class="form-control" value="{{ $motor->motor_type }}" type="text" name="motor_type" disabled>
    </div>
    <div class="form-group">
        <label for="">Pilihan warna Motor</label>
        <input class="form-control" value="{{ $motor->motor_warna_pilihan }}" type="text" name="motor_warna_pilihan" disabled>
    </div>
    <div class="form-group">
        <label for="">Harga Motor</label>
        <input class="form-control" value="{{ $motor->motor_harga }}" type="text" name="motor_harga" disabled>
    </div>
   
    <div class="form-group">
        <label for="">Gambar</label><br>
        <img src="{{ asset('assets/img/motor/'.$motor->motor_gambar) }}" alt="" height="250px" width="250px">
        <input type="file" class="form-control" name="motor_gambar" disabled>
    </div>
    
    <div class="form-group">
        <a href="{{ url('/backend/motor') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </div>
            </div>
                </div>
                    </div>
                        </div>
                            @endsection