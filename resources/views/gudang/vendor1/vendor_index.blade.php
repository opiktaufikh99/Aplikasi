@extends('gudang.MODIFG1.layout1')
@section('judul')
    <h2>ini adalah halaman vendor</h2>
@endsection
@section('isi')
    <div class="card">
    <div class="card-header">
        <form action="/import" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" >
            <input type="submit" value="import">   
        </form>
        <h3>vendor</h3>
        <a class="btn btn-primary" href="/vendor_create">Tambah Data</a>
    </div>

    <div>
        <table class="table">
        <tr>
            <th>Vendor</th>
            <th>email</th>
            <th> no telepon</th>
            <th> alamat</th>
            <th>Action</th>
        </tr>
        @foreach ($vendor as $data )
        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->no_tlpan }}</td>
            <td>{{ $data->alamat }}</td>
            <td>
            <a class="btn btn-primary" href="/vendor_detail/{{ $data->id }}">Detail</a>
            <a class= "btn btn-warning" href="/vendor_edit/{{ $data->id }}">Edit</a>
            <a class="btn btn-danger" href="/vendor_delete/{{ $data->id }}">Hapus</a>
            </td>     
        </tr>       
        @endforeach
        
        </table>
         <a href="/vendor_export" class=" btn btn-primary"> Export </a>
    </div>
    
    </div>
@endsection