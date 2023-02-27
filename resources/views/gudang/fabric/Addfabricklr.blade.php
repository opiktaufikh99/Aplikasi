@extends('gudang.MODIFG1.layout1')
@section('judul')
@endsection
@section('isi')
    <div class="card">
        <div class="card-body">
            <form action="#" method="post">
                @csrf
                <div class="mb-3 " >
                    <label for="vendor">vendor</label>
                    <select name="vendor_id" id="vendor" class="form-control" >
                        <option value="">vendor</option>
                        @foreach ( $fabric as $data )
                            <option value="{{ $data->id}}" >
                            {{ $data->vendor->name}}</option>
                        @endforeach
                </select>
                </div>
                <div class="mb-3">
                    <label for="kode_fabric" class="form-label">kode fabric</label>
                    <input type="text" id ="kode_fabric" class="form-control" name="kode_fabric" placeholder="kode fabric">
                <div class="mb-3">
                    <label for="color" class="form-label">color</label>
                    <input type="text" id ="color" class="form-control" name="color" placeholder="color">
                </div>
                
                <input type="submit" name="submit" value="save" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection