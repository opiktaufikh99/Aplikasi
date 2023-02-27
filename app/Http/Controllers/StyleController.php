<?php

namespace App\Http\Controllers;

use App\Models\StyleModel;
use App\Models\VendorModel;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class StyleController extends Controller
{
    public function index(){
        $style=StyleModel::with('vendor')->get();
        return view('gudang.style1.style_index',['style'=>$style]);
    }
    public function show($id){
        $style =StyleModel::with('vendor.buyer')->findOrFail($id);
        return view('gudang.style1.style_show',['style'=>$style]);
    }
    public function create(){
        $style= StyleModel::all();
        $vendor= VendorModel::all();
        return view('gudang.style1.style_create',[
            'style'=>$style,
            'vendor'=>$vendor
        ]);
    }
    public function store(Request $request){
            $config= 
                ['table' => 'products',
                'field'=>'pid', '
                length' => 6, 'prefix' =>date('y')];
        $kode_style = IdGenerator::generate($config);
        $foto_file= $request->file('gambar');
        $foto_extensi = $foto_file->extension();
        $foto_nama = date('ymdhis').".". $foto_extensi;
        $foto_file->move(public_path('foto'),$foto_nama);

        $data = [
            'style'=> $request->input('style'),
            'kode_style'=>$kode_style ,
            'gambar'=> $foto_nama,
            'color'=> $request->input('color'),
            'vendor_id'=> $request->input('vendor_id'),
        ];
       
        StyleModel::create($data);
        return redirect('/style');
    }
}