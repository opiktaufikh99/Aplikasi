@extends('gudang.MODIFG1.layout1')
@section('isi')
    <div class="card">
        <div class="card-header">
            <h2>ini adalah halaman detail dari <b> {{ $buyer->name }}</b></h2>
        </div>
        <div class="card-body">
            <ul>
                <li>nama {{ $buyer->name }}</li>
                <li>alamat {{ $buyer->alamat }}</li>
                <li>email {{ $buyer->name }}</li>
                <li>no telepon {{ $buyer->name }}</li>
            </ul>
        </div>
        <div class="mb-3 ">
        <a class="btn btn-primary" href="/buyer" >back</a>
        </div>
        
    </div>
@endsection