@extends('operator.ModOperator.layout1')
@section('judul')
@endsection
@section('isi')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <a href="/operator-create" class="btn btn-primary">tambah data</a>
                <tr>
                    <th>no</th>
                    <th>nama</th>
                    <th>kode operator</th>
                    <th>bagian</th>
                    <th>barang masuk</th>
                    <th>barang keluar</th>
                    <th>barang stok</th>
                    <th>action</th>
                </tr>
                @foreach ($operator as $data )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->kode_operator }}</td>
                    <td>{{ $data->bagian}}</td>
                    <td>{{ $data->bng_masuk }}</td>
                    <td>{{ $data->keluar }}</td>
                    <td>{{ $data->stok }}</td>
                    <td>
                        <a class="btn btn-primary" href="operator-detail/{id}">Detail</a>
                        <a class="btn btn-warning" href="operator-edit/{id}">Edit</a>
                        <a class="btn btn-danger" href="operator-delete/{id}">Hapus</a>
                    </td>
                </tr> 
                @endforeach
            </table>
        </div>
    </div>
@endsection