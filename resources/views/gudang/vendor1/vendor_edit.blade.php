@extends('gudang.MODIFG1.layout1')
@section('judul')
Tambah Data
@endsection
@section('isi')
    <div class="card">
    <div class="card-body">
        <div class="container">
    <h1>edit data</h1>
    <form action="/vendor_update/{{ $vendor->id }}" method="post">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">vendor</label> 
        <input type="text" id ="name" class="form-control" name="name" 
        placeholder="vendor" value="{{ $vendor->name }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input type="text" id ="email" class="form-control" name="email"
         placeholder="email" value="{{ $vendor->email }}">
    </div>
    <div class="mb-3">
        <label for="no_tlpan" class="form-label"> no_tlpan</label>
        <input type="text" id ="no_tlpan" class="form-control" name="no_tlpan" 
        placeholder="no_tlpan" value="{{ $vendor->no_tlpan }}">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label"> alamat</label>
        <input type="text" id ="alamat" class="form-control" name="alamat" 
        placeholder="alamat" value="{{ $vendor->alamat }}">
    </div>
    <div class="mb-3 " >
        <label for="buyer_id">buyer</label>
        <select name="buyer_id" id="buyer_id" class="form-control" >
            <option value="{{ $buyer[0]->id}}">{{ $buyer[0]->name }}</option>
            @foreach ( $buyer as $data )
                <option value="{{ $data->id}}" >
                {{ $data->name}}</option>
            @endforeach
    </select>
    </div>

    <input type="submit" name="submit" value="save" class="btn btn-primary">
    </form>
    </div>
    </div>
    </div>

@endsection