@extends('gudang.MODIFG1.layout1');
@section('judul')
@endsection
@section('isi')
<h2>ini adalah halaman create</h2>
<div class="container">
<h1>Tambah data</h1>
<form action="/style" method="post" enctype="multipart/form-data">
@csrf

<div class="mb-3">
<label for="style" class="form-label">style</label>
<input type="text" id ="style" class="form-control" name="style" placeholder="style">
</div>
<div class="input-group mb-3">
<label class="input-group-text" for="gambar">gambar</label>
<div class="input-group">
  <input type="file" class="form-control" id="gambar" name="gambar">
</div>
</div>
<div class="mb-3">
<div class="mb-3">
<label for="color" class="form-label"> color </label>
<input type="text" id ="color" class="form-control" name="color" placeholder="color" autocomplete="off">
</div>
<div class="mb-3 " >
    <label for="vendor">vendor</label>
    <select name="vendor_id" id="vendor" class="form-control" required>
        <option value="">vendor</option>
        @foreach ($vendor as $data )
        <option value="{{ $data->id}}">{{ $data->name}}</option>
        @endforeach
    </select>
</div>
<input type="submit" name="submit" value="save" class="btn btn-primary">
</form>
</div>

@endsection