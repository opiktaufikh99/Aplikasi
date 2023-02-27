@extends('gudang.MODIFG1.layout1')
@section('isi')
    <div class="card">
    <div class="card-header">
    <H2>buyer</H2>
    <a class="btn btn-primary " href="/buyer-create"> Tambah Data</a>
    </div>
    
    <div class="card-body">
        <div class="card">
            <table class="table">
                <tr>
                    <th>Buyer</th>
                    <th>Email</th>
                    <th> No Telepon</th>
                    <th> Alamat</th>
                    <th> Action</th>
                </tr>
                @foreach ($buyer as $data )
                <tr>
                   <td>{{ $data->name }}</td>   
                   <td>{{ $data->email }}</td>   
                   <td>{{ $data->no_tlpan }}</td>   
                   <td>{{ $data->alamat }}</td>   
                   <td>
                   <a class="btn btn-primary" href="buyer-show/{{ $data->id }}">detai</a>
                   <a class="btn btn-warning" href="/buyer-edit/{{ $data->id }}">edit</a>
                   <a class="btn btn-danger" href="/buyer-delete/{{ $data->id }}">hapus</a>
                   </td>
                </tr>
                @endforeach
                
            </table>
        </div>
    </div>
    
    </div>
@endsection