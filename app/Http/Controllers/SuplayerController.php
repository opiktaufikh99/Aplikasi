<?php

namespace App\Http\Controllers;

use App\Models\Suplayer;
use Illuminate\Http\Request;

class SuplayerController extends Controller
{
    public function index(){
        $suplayer= Suplayer::all();
        return view('gudang.suplayer.suplayer_index',['suplayer'=>$suplayer]);
    }
    public function detail($id){
        $suplayer=Suplayer::findOrFail($id);
        return view('gudang.suplayer.suplayer_detail',['suplayer'=>$suplayer]);
    }
    public function create(){
        $suplayer=Suplayer::all();
        return view('gudang.suplayer.suplayer_cerate',['suplayer'=>$suplayer]);
    }
    public function store(Request $request){
        $suplayer = new Suplayer();
        $suplayer->nama =$request->nama;
        $suplayer->kode_supplayer =$request->kode_supplayer;
        $suplayer->email=$request->email;
        $suplayer->no_tlpan =$request->no_tlpan;
        $suplayer->save();
            return redirect('/suplayer');
    }
    public function edit(Request $request, $id){
        $suplayer = Suplayer::findOrFail($id);
        return view('gudang.suplayer.suplayer_edit',['suplayer'=>$suplayer]);
    }
    public function update(Request $request, $id){
        $suplayer= Suplayer::findOrfail($id);
        $suplayer->nama =$request->nama;
        $suplayer->kode_supplayer =$request->kode_supplayer;
        $suplayer->email=$request->email;
        $suplayer->no_tlpan =$request->no_tlpan;
        $suplayer->save();
        return redirect('/suplayer');
    }
}