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
        <div class="my-2 col-12 col-sm-8 col-md-6">
            <form action="" method="get">
                <a class="btn btn-primary my-1" href="/vendor_create">Tambah Data</a>                    
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" placeholder="keyword"  aria-label="Username" name="keyword">
                    <button class="input-group-text" id="addon-wrapping"  class="btn btn-primary">search</button>
                </div>
                  </div>
            </form>
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
         {{ $vendor->links() }}
    </div>
    
    </div>
@endsection