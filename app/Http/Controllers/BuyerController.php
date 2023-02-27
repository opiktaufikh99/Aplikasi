<?php

namespace App\Http\Controllers;

use App\Models\BuyerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyerController extends Controller
{
    public function index(){
        $buyer = BuyerModel::all();
        return view('gudang.buyer.buyer_index',['buyer'=>$buyer]);

    }
    public function show($id){
        $buyer = BuyerModel::with('vendor')->findOrFail($id);
        return view('gudang.buyer.buyer_detail',['buyer'=>$buyer]);
    }
    public function create(){
        $buyer =BuyerModel::all();
        return view('gudang.buyer.buyer_create',['buyer'=>$buyer]);
    }
    public function store(Request $request){
        $buyer = new BuyerModel();
            $buyer->name =$request->name;
            $buyer->email =$request->email;
            $buyer->no_tlpan=$request->no_tlpan;
            $buyer->alamat =$request->alamat;
            $buyer->save();
            return redirect('/buyer');
    }
    public function edit(Request $request, $id){
        $buyer = BuyerModel::findOrFail($id);
        return view('gudang.buyer.buyer_edit',['buyer'=>$buyer]);
    }
    public function update(Request $request, $id){
        $buyer= BuyerModel::findOrfail($id);
        $buyer->name=$request->name;
        $buyer->email=$request->email;
        $buyer->no_tlpan=$request->no_tlpan;
        $buyer->alamat=$request->alamat;
        $buyer->save();
        return redirect('/buyer');
    }
    public function delete($id){
        $buyer=BuyerModel::findOrFail($id);
        return view('gudang.buyer.buyer_delete',['buyer'=>$buyer]);
    }
    public function destroy($id){
        $delete=DB::table('buyer')->where('id',$id)->delete();
        return redirect('/buyer');
    }
}