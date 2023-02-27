@extends('gudang.MODIFG1.layout1')
@section('judul')
<h1>Edit Data</h1>
@endsection
@section('isi')
<div class="container">

<form action="/suplayer-update/{{ $suplayer->id }}" method="post">
 @method('put')
@csrf
    <div class="mb-3">
        <label for="nama" class="form-label"> suplayer</label>
        <input type="text" id ="nama" class="form-control" name="nama" 
        value="{{ $suplayer->nama}}" placeholder="suplayer">
    </div>
    <div class="mb-3">
        <label for="kode_suplayer" class="form-label"> kode suplayer</label>
        <input type="text" id ="suplayer" class="form-control" name="kode_supplayer" value="{{ $suplayer->kode_supplayer }}" placeholder="kode suplayer">
     </div>
     <div class="mb-3">
        <label for="email" class="form-label"> email</label>
        <input type="text" id ="email" class="form-control" name="email" value="{{ $suplayer->email }}" placeholder="email">
    </div>
     <div class="mb-3">
        <label for="tlpn" class="form-label"> nomer telepon</label>
        <input type="text" id ="tlpn" class="form-control" name="no_tlpan" value="{{ $suplayer->no_tlpan }}" placeholder="no telepon">
     </div>

        <input type="submit" name="submit" value="save" class="btn btn-primary">
        </form>
    </div>
@endsection