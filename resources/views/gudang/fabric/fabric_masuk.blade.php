@extends('gudang.MODIFG1.layout1')
@section('judul')
        <h2>tambah data</h2>
@endsection
@section('isi')
    <div class="card">
         <div class="card-body">
         <div class="container">
    <form action="/fabric" method="post">
        @csrf
        <div class="mb-3 " >
            <label for="fabric">kode fabric</label>
            <select name="fabric_id" id="fabric" class="form-control" required>
                <option value="">kode fabric</option>
                @foreach ($fabric as $data )
                    <option value="{{ $data->fabric->id}}" >
                    {{ $data->fabric->kode_fabric}}</option>
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