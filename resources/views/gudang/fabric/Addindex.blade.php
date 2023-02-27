@extends('gudang.MODIFG1.layout1')
@section('judul')
@endsection
@section('isi')
    <h2>ini adalah masuk fabric</h2>
    <div class="card">
        <div class="card-body">
        <div class="container">
   <form action="storeindx" method="post">
       @csrf
       <div class="mb-3">
           <label for="kode_fabric" class="form-label">kode fabric</label>
           <input type="text" id ="kode_fabric" class="form-control" name="kode_fabric" placeholder="kode fabric">
       <div class="mb-3">
           <label for="color" class="form-label">color</label>
           <input type="text" id ="color" class="form-control" name="color" placeholder="color">
       </div>
       <div class="mb-3 " >
        <label for="vendor">vendor</label>
        <select name="vendor_id" id="vendor" class="form-control" >
            <option value="">vendor</option>
            @foreach ( $vendor as $data )
                <option value="{{ $data->id}}" >
                {{ $data->name}}</option>
            @endforeach
    </select>
    </div>
       <div class="mb-3 " >
        <label for="style">style</label>
        <select name="style_id" id="style" class="form-control" >
            <option value="">style</option>
            @foreach ( $style as $data )
                <option value="{{ $data->id}}" >
                {{ $data->style}}</option>
            @endforeach
    </select>
    </div>
       <div class="mb-3 " >
        <label for="suplayer">suplayer</label>
        <select name="suplayer_id" id="suplayer" class="form-control" >
            <option value="">suplayer</option>
            @foreach ( $suplayer as $data )
                <option value="{{ $data->id}}" >
                {{ $data->nama}}</option>
            @endforeach
    </select>
    </div>
       <input type="submit" name="submit" value="save" class="btn btn-primary">
   </form>
       </div>
       </div>
   </div>
@endsection