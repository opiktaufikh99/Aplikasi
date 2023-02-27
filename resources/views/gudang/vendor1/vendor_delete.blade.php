@extends('gudang.MODIFG1.layout1')
@section('judul')
@endsection
@section('isi')
<h2> Ini adalah halaman delete</h2><br>
<strong> apakah anda ingin menghapus vendor<h2> {{ $vendor->name}}</h2></strong>
<form style="display:inline-block" action="/vendor_destroy/{{ $vendor->id }}" method="post">
@method('delete')
@csrf
<button type="submit" class="btn btn-danger">hapus</button>
</form>
<a  class="btn btn-primary"  href="/vendor">batal</a>
@endsection