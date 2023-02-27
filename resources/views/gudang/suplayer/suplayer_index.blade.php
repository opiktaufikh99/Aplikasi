@extends('gudang.MODIFG1.layout1')
@section('judul')
@endsection
@section('isi')
    <div class="container">
        <div class="card">
            
            <div class="card-body">
                <a class="btn btn-primary" href="/suplayer-create">Tambah Data</a>
                <h2>ini adalah halaman index</h2>
                <table class="table">
                    <tr>
                        <th>Nama</th>
                        <th>Kode Suplayer</th>
                        <th>Email</th>
                        <th>No Telepon</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($suplayer as $data )
                        <tr>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->kode_supplayer }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->no_tlpan}}</td>
                            <td>
                                <a class="btn btn-primary" href="/suplayer-detail/{{ $data->id }}">Detail</a>
                                <a class="btn btn-warning" href="/suplayer-edit/{{ $data->id }}">Edit</a>
                                <a class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection