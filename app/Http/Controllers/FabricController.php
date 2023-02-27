<?php

namespace App\Http\Controllers;

use App\Models\Fabric;
use App\Models\StyleModel;
use App\Models\Fabric_Masuk;
use Illuminate\Http\Request;
use App\Models\Fabric_Keluar;
use App\Models\Operator;
use App\Models\Suplayer;
use App\Models\VendorModel;
use Illuminate\Support\Facades\DB;

class FabricController extends Controller
{      
        public function index(Request $request){
            $fabric= Fabric::with(['vendor','suplayer'])->get();
            return view('gudang.fabric.fabric_index',['fabric'=>$fabric]);
        }
        public function infabmsk(){
            $fabric1=Fabric::get('kode_fabric');
            $fabric2= Fabric_Masuk::with('fabric')->get();
            return view('gudang.fabric.fabric_inmasuk',[
                'fabric1'=>$fabric1,
                'fabric2'=>$fabric2
            ]);
        }
        public function infabklr(){
            $fabric= Fabric_Keluar::with(['fabric'])->get();
            return view('gudang.fabric.fabric_inkeluar',['fabric'=>$fabric]);
        }

        // create
        public function ADDfabric(){
            $fabric = Fabric::with(['style','vendor','suplayer','fabric_masuk','fabric_keluar'])->get();
            $style= StyleModel::all();
            $vendor= VendorModel::all();
            $suplayer= Suplayer::all();
            return view('gudang.fabric.Addindex',[
                'fabric'=>$fabric,
                'style'=>$style,
                'vendor'=>$vendor,
                'suplayer'=>$suplayer
            ]);
        }
        public function Addfabmsk(){
            $fabric1 = Fabric_Masuk::with('fabric')->get();
            $fabric = Fabric::get(['id','kode_fabric']);
            return view('gudang.fabric.Addfabmsk',[
                'fabric1'=>$fabric1,
                'fabric'=>$fabric
            ]);
        }
        public function Addfabklr(){
            $fabric = Fabric_Keluar::with(['fabric'])->get();
            return view('gudang.fabric.Addfabricklr',['fabric'=>$fabric]);
        }
         
        // store
        public function storeindx(Request $request){
            $fabric = new Fabric();
        $fabric->kode_fabric=$request->kode_fabric;
        $fabric->color=$request->color;
        $fabric->vendor_id=$request->vendor_id;
        $fabric->style_id=$request->style_id;
        $fabric->suplayer_id=$request->suplayer_id;
        $fabric->save();
        return redirect('/fabric');
        }
        public function storefabmsk(Request $request){
        $fabric = Fabric::find($request->fabric_id);
        Fabric_Masuk::create($request->all());
        $fabric->update([
            'stok_roll'=>$fabric->stok_roll+$request->roll,
            'stok_yard'=>$fabric->stok_yard+$request->yard
        ]);
        return redirect('/fabric');
        
            
        }
        public function storefabklr(Request $request){
            Fabric_Keluar::create($request->all());
            $fabric = Fabric::find($request->fabric_id);
            $fabric->update([
            'stok_roll'=>$fabric->stok_roll-$request->roll,
            'stok_yard'=>$fabric->stok_yard-$request->yard
            ]);
            // $operator= Operator::find($request->operator_id);
            // $operator->update([
            // 'bahan_roll'=>$operator->bahan_roll+$request->roll,
            // 'bahan_yard'=>$operator->bahan_yard+$request->yard
            // ]);
            return redirect('/fabric'); 
        }


        // edit
        public function editindex(){}
        public function editfabmsk(){}
        public function editfabklr(){}

        //update
        public function indexup(){}
        public function fabmskup(){}
        public function fabklrup(){}
}