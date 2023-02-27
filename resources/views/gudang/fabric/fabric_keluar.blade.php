@extends('gudang.MODIFG1.layout1')
@section('judul')
        <h2>keluar Fabric</h2>
@endsection
@section('isi')
<table class="table">
        <tr>
                <th>No</th>
                <th>kode fabric</th>
                <th>Jumlah keluar</th>
                <th>pengambil</th>
                <th>bagian</th>
                <th>tanggal</th>
        </tr>
        @foreach ($fabric as $data )
        <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->kode_fabric }}</td>
                <td>-</td>
                <td>line</td>
                <td>bagian</td>
                <td>-</td>
        </tr>
        @endforeach
</table>
@endsection