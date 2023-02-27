@extends('gudang.MODIFG1.layout1')
@section('judul')
        <h2>tambah data</h2>
@endsection
@section('isi')
    <div class="card">
         <div class="card-body">
         <div class="container">
    <form action="/buyer" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label"> buyer</label>
            <input type="text" id ="name" class="form-control" name="name" placeholder="buyer">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label"> email</label>
            <input type="text" id ="email" class="form-control" name="email" placeholder="emailr">
        </div>
        <div class="mb-3">
            <label for="tlpn" class="form-label"> nomer telepon</label>
            <input type="text" id ="tlpn" class="form-control" name="no_tlpan" placeholder="no telepon">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label"> alamat</label>
            <input type="text" id ="alamat" class="form-control" name="alamat" placeholder="alamat">
        </div>
        <input type="submit" name="submit" value="save" class="btn btn-primary">
    </form>
        </div>
        </div>
    </div>
@endsection