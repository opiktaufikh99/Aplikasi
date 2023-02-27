@extends('gudang.MODIFG1.layout1')
@section('judul')
        <h2>fabric</h2>

@endsection
@section('isi')
<div class="card">
        <div class="card-body">
                <a href="/ADDfabric" class="btn btn-primary"> Tambah Data</a>
                <table class="table">
                        <tr>
                                <th>suplayer</th>
                                <th>kode fabric</th>
                                <th>stok roll</th>
                                <th>stok yard</th>
                                <th>color</th>
                        </tr>
                        @foreach ($fabric as $data )
                        <tr>
                                <td>{{ $data->suplayer->nama }}</td>
                                <td>{{ $data->kode_fabric }}</td>
                                <td>{{ $data->stok_roll }}</td>
                                <td>{{ $data->stok_yard }}</td>
                                <td>{{ $data->color }}</td>
                        </tr>
                        @endforeach
                </table>
        </div>
</div>
@endsection