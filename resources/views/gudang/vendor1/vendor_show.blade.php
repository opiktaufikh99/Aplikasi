@extends('gudang.MODIFG1.layout1')
@section('judul')
    <h3>halaman detail dari vendor <strong> {{ $vendor->name }}</strong></h3>
@endsection
@section('isi')
    <div class="card">
        <div class="card-body">
            <ul>
                <li> nama :{{ $vendor->name }}</li>
                <li> email:{{ $vendor->email }}</li>
                <li> telepon :{{ $vendor->no_tlpan }}</li>
                <li> alamat :{{ $vendor->alamat }}</li>
                <li> buyer:{{ $vendor->buyer->name}}</li>
            </ul>
        </div>
        <a href="/vendor_export/{{ $vendor->id }}" class=" btn btn-primary col-12"> Export </a>
    </div>
@endsection