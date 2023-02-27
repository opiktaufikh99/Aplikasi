@extends('gudang.MODIFG1.layout1')
@section('judul')
        <h2>benang masuk</h2>
    <a class="btn btn-primary" href="/add-bng_msk">tambah benang</a>
        <div class="card">
        <div class="card-body">
                <table class="table">
                        <tr>
                                <th>no</th>
                                <th>kode benang</th>
                                <th>benang masuk</th>
                        </tr>
                        @foreach ($benang_masuk as $data)
                        <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->benang->kode_benang}}</td>
                                <td>{{ $data->qty}}</td>
                        </tr>
                                
                        @endforeach
                </table>
        </div>
        </div>
@endsection
@section('isi')
@endsection