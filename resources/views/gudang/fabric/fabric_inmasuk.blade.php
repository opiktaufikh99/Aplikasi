@extends('gudang.MODIFG1.layout1')
@section('judul')
        <h2> Fabric</h2><a class="btn btn-primary" href="ADDfabmsk">tambah data</a>
@endsection
@section('isi')
<table class="table">
        <tr>
                <th>No</th>
                <th>kode fabric</th>
                <th>yard</th>
                <th>roll</th>
                <th>tanggal</th>
        </tr>
        @foreach ($fabric2 as $data )
        <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                {{ $data->fabric->kode_fabric }}
                </td>
                <td>{{ $data->yard }}</td>
                <td>{{ $data->roll }}</td>
                <td>{{ $data->created_at}}</td>
        </tr>
        @endforeach
</table>
@endsection