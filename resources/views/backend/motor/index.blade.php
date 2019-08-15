@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Halaman Kategori</div>
                <br>
                <center><a href="{{ route('motor.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Kode Motor</th>
                                <th>Merk Motor</th>
                                <th>Type Motor</th>
                                <th>Warna Motor</th>
                                <th>Harga Motor</th>
                                <th>Gambar Motor</th>
                                <th colspan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($motor as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->motor_kode }}</td>
                    <td>{{ $data->motor_merk }}</td>
                    <td>{{ $data->motor_type }}</td>
                    <td>{{ $data->motor_warna_pilihan }}</td>
                    <td>{{ $data->motor_harga }}</td>
                    <td><img src="{{ asset('assets/img/motor/'.$data->motor_gambar) }}" alt="" height="100px" width="100px"></td>
                    <td><a href="{{ route('motor.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('motor.show', $data->id) }}" class="btn btn-success">Detail Data</a></td>
                    <td><form action="{{ route('motor.destroy', $data->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection