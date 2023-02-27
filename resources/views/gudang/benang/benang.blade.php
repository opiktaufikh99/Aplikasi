@extends('gudang.MODIFG1.layout1')
@section('isi')
    <div class="card">
        <div class="card-header">
        <h2>Halaman Benang</h2>
        </div>
        <div class="card-body">
            <a href="benang-create" class="btn btn-primary"> tambah data</a>
            <table class="table">
                <tr>
                    <th>kode benang</th>
                    <th>style</th>
                    <th>benang masuk</th>
                    <th> benang Keluar</th>
                    <th> Stok</th>
                </tr>
                @foreach ($benang as $data )
                     <tr>
                        <td> {{ $data->kode_benang }}</td>
                        <td>
                            @foreach ($data->style as $item )
                                {{ $item['style'] }}
                            @endforeach
                        </td>
                        <td>{{ $data->BenangMasuk->where('operator_id',1)->sum('qty') }}</td>
                        <td>{{ $data->BenangKeluar->where('operator_id',2)->sum('qty')}}</td>
                        <td>{{ $data->BenangMasuk->sum('qty')-$data->BenangKeluar->sum('qty') }}</td>
                    </tr>
                @endforeach
            
            </table>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
