@extends('gudang.MODIFG1.layout1')
@section('judul')
@section('isi')
<div class="card">
    <div class="card-body">
    <div class="container">
<form action="/storefabmsk" method="post">
   @csrf
   <div class="mb-3 " >
    <label for="kode_fabric">kode fabric</label>
    <select name="fabric_id" id="kode_fabric" class="form-control" >
        <option value="">kode fabric</option>
        @foreach ( $fabric as $data )
            <option value="{{ $data->id}}" >
                {{ $data->kode_fabric }}
            </option>
        @endforeach
</select>
</div>
   <div class="mb-3">
       <label for="yard" class="form-label"> yard</label>
       <input type="text" id ="yard" class="form-control" name="yard" placeholder="yard">
   </div>
   <div class="mb-3">
       <label for="roll" class="form-label">roll</label>
       <input type="text" id ="roll" class="form-control" name="roll" placeholder="roll">
   </div>

   <input type="submit" name="submit" value="save" class="btn btn-primary">
</form>
   </div>
   </div>
</div>
@endsection