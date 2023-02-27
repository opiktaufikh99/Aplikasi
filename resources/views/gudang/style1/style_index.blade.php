@extends('gudang.MODIFG1.layout1')
@section('judul')
@endsection
@section('isi')
    <div class="card">
    <div class="card-header">
    <a href="style_create" class="btn btn-primary"> tambah data</a>
    </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>kode style</th>
                    <th>style</th>
                    <th>gambar</th>
                    <th>color</th>
                    {{-- <th>vendor</th> --}}
                    <th>Action</th>
                </tr>
                @foreach ($style as $data )
                 <tr>
                    <td>{{ $data->kode_style }}</td>
                    <td>{{ $data->style }}</td>
                    <td>@if ($data->gambar)
                     <img style="max-width:50px; max-height:50px" src="{{ url('foto').'/'.$data->gambar }}"">
                     @endif</td>
                    <td>{{ $data->color}}</td>
                    <td>
                    <a href="/style_show/{{ $data->id }}" class="btn btn-primary">Detail</a>
                    <a href="/style_edit/{{ $data->id }} " class="btn btn-warning">Edit</a>
                    <a>Delete</a>
                    </td>
                 </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection