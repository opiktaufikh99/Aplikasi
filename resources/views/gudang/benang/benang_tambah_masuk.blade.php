@extends('gudang.MODIFG1.layout1')
@section('judul')
        <h2>Create benang</h2>

@endsection
@section('isi')
<div class="card">
         <div class="card-body">
         <div class="container">
    <form action="/benang" method="post">
        @csrf
        <div class="mb-3">
            <label for="qty" class="form-label"> quantity</label>
            <input type="text" id ="qty" class="form-control" name="qty" placeholder="quantity">
        </div>
        <div class="mb-3 " >
    <label for="benang">kode benang</label>
    <select name="benang_id" id="benang" class="form-control" required>
        <option value="">kode benang</option>
        @foreach ($benangmasuk as $data )
            <option value="{{ $data->benang->id}}" >
            {{ $data->benang->kode_benang}}</option>
        @endforeach
    </select>
    </div>
        <input type="submit" name="submit" value="save" class="btn btn-primary">
</form>
@endsection