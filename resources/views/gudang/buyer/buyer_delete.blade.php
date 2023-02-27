@extends('gudang.MODIFG1.layout1')
@section('judul')
@endsection
@section('isi')
 <div class="mt-5">
<h2>apakah anda yankin ingin ngehapus buyer {{ $buyer->name }}</h2>
<form style="display:inline-block" action="buyer-destroy{{ $buyer->id }}" method="post">
@method('delete')
@csrf
<button type="submit" class="btn btn-danger">hapus</button>
</form>
<a href="/buyer" class="btn btn-primary">batal</a>
  
</div>

@endsection