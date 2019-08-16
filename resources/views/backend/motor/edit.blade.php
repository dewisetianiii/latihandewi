@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Motor</div>
                <div class="card-body">
                    <form action="{{ route('motor.update', $motor->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
    <div class="form-group">
        <label for="">kode Motor</label>
        <input class="form-control" value="{{ $motor->motor_kode }}" type="text" name="motor_kode">
    </div>
    <div class="form-group">
        <label for="">Merk Motor</label>
        <input class="form-control" value="{{ $motor->motor_merk }}" type="text" name="motor_merk">
    </div>
    <div class="form-group">
        <label for="">Type Motor</label>
        <input class="form-control" value="{{ $motor->motor_type }}" type="text" name="motor_type">
    </div>
    <div class="form-group">
        <label for="">Pilihan warna motor</label>
        <input class="form-control" value="{{ $motor->motor_warna_pilihan }}" type="text" name="motor_warna_pilihan">
    </div>
    <div class="form-group">
        <label for="">Harga Motor</label>
        <input class="form-control" value="{{ $motor->motor_harga }}" type="text" name="motor_harga">
    </div>
    <div class="form-group">
        <label for="">Gambar Motor</label><br>
        <img src="{{ asset('assets/img/motor/'.$motor->motor_gambar) }}" alt="" height="250px" width="250px">
        <input type="file" class="form-control" name="motor_gambar">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ url('/backend/motor') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection