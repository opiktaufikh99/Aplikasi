@extends('gudang.MODIFG1.layout1')
@section('judul')
    <h3>halaman detail dari vendor <strong> {{ $style->style }}</strong></h3>
@endsection
@section('isi')
    <div class="card">
        <div class="card-body">
            <ul>
                <li> style:      {{ $style->style }}</li>
                <li> kode style: {{ $style->kode_style }}</li>
                <li> color :     {{ $style->color }}</li>
                <li> gambar:     {{ $style->gambar }}</li>
                <li> vendor:     {{ $style->vendor->name}}</li>
                <li>buyer : {{ $style->vendor->buyer->name }}</li>

            </ul>
        </div>
    </div>
@endsection