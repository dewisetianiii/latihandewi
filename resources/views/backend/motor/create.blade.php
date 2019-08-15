@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Motor</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Tambah Data Motor</div>
                    <div class="card-body">
                    <form action="{{ route('motor.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Kode Motor</label>
                                <input type="text" name="motor_kode" class="form-control" required>
                                </div>
                            <div class="form-group">
                                <label for="">Merk Motor</label>
                                <input type="text" name="motor_merk" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Type Motor</label>
                                <input type="text" name="motor_type" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Pilihan Warna motor</label>
                                <input type="text" name="motor_warna_pilihan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Harga Motor</label>
                                <input type="number" name="motor_harga" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Gambar Motor</label>
                                <input type="file" name="motor_gambar" class="form-control" required>
                            </div>
        
                            <button type="submit" class="btn btn-md btn-info">Simpan</button>
                            <a name="" id="" class="btn btn-md btn-warning" 
                            href="{{ route('motor.index') }}" role="button">Kembali</a>
                            
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection