@extends('cutting.modifcutting.layout')
@section('judul')
@endsection
@section('isi')
    <div class="card">
        {{ $cutting}}
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>kode_cutting</th>
                    <th>nama</th>
                    <th>style</th>
                    <th>stok roll</th>
                    <th>stok yard</th>
                </tr>
                @foreach ($cutting as $data )
                    <tr>
                        <td>{{ $data }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection