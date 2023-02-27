@extends('operator.ModOperator.layout1')
@section('judul')
    <h2> ini adalah halaman create</h2>
@endsection
@section('isi')
    <div class="card">
         <div class="card-body">
         <div class="container">
    <form action="/operator" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">kode operator</label>
            <input type="text" id ="name" class="form-control" name="name" placeholder="operator">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label"> nama</label>
            <input type="text" id ="name" class="form-control" name="name" placeholder="name">
        </div>
        <div class="mb-3">
            <label for="bagian" class="form-label">bagian</label>
            <input type="text" id ="bagian" class="form-control" name="bagian" placeholder="bagian">
        </div>
        <input type="submit" name="submit" value="save" class="btn btn-primary">
    </form>
        </div>
        </div>
    </div>
@endsection