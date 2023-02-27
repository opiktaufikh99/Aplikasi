@extends('gudang.MODIFG1.layout1')
@section('judul')
@endsection
@section('isi')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2>ini adalah halaman detail</h2>
                <ul>
                    <li>nama :{{ $suplayer->nama }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection