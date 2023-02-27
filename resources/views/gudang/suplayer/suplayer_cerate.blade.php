@extends('gudang.MODIFG1.layout1')
@section('judul')
@endsection
@section('isi')
    <div class="container">
        <div class="card">
            <div class="card-body">
                @extends('gudang.MODIFG1.layout1')
@section('judul')
        <h2>tambah data</h2>
@endsection
@section('isi')
    <div class="card">
         <div class="card-body">
         <div class="container">
    <form action="/suplayer" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label"> Nama </label>
            <input type="text" id ="nama" class="form-control" name="nama" placeholder="suplayer">
        </div>
        <div class="mb-3">
            <label for="kode_supplayer" class="form-label"> kode suplayer</label>
            <input type="text" id ="kode_supplayer" class="form-control" name="kode_supplayer" placeholder="kode suplayer">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label"> email</label>
            <input type="text" id ="email" class="form-control" name="no_tlpan" placeholder="email">
        </div>
        <div class="mb-3">
            <label for="tlpn" class="form-label"> nomer telepon</label>
            <input type="text" id ="tlpn" class="form-control" name="email" placeholder="no telepon">
        </div>
        <input type="submit" name="submit" value="save" class="btn btn-primary">
    </form>
        </div>
        </div>
    </div>
@endsection
            </div>
        </div>
    </div>
@endsection