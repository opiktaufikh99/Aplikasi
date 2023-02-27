<?php

namespace App\Http\Controllers;

use App\Models\Benang;
use App\Models\Benangkeluar;
use App\Models\BenangMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BenangController extends Controller
{
    // public function index(Request $request){
    //  $benang = Benang::with('BenangMasuk','BenangKeluar')->get();
    //  return view('gudang.benang.benang',[
    //     'benang'=>$benang
    // ]);
    // }

    // public function index(Request $request){
    //     $benang=Benang::all();
    //     $benang_keluar=Benangkeluar::with('benang')->get();
    //     $benang_masuk=BenangMasuk::with('benang')->get();
    //     // $benang->increment('stok_sekarang',1000);
    //     if($request->hal=='masuk'){
    //         return view('gudang.benang.benang_masuk',[
    //             'benang_masuk'=>$benang_masuk
    //         ]);
    //     }
    //     else if($request->hal=='keluar'){
    //         return view('gudang.benang.benang_keluar',[
    //             'benang_keluar'=>$benang_keluar
    //         ]);
    //     } else{
    //         return view('gudang.benang.benang',[
    //             'benang'=>$benang
    //         ]);
    //     }
    // }
    // public function create(){
    //     $masuk=BenangMasuk::with('benang');
    //     return view('gudang.benang.benang_masuk',['masuk'=>$masuk]);
    // }

        public function indexbng(){
           
            $benang = Benang::with(['BenangMasuk','BenangKeluar','style','suplayer'])->get();
           
            return view('gudang.benang.benang',['benang'=>$benang]);
        }
        public function indexbngmsk(){
            $benang_masuk=BenangMasuk::with('benang.suplayer')->get();
            return view('gudang.benang.benang_masuk',['benang_masuk'=>$benang_masuk]);
        }
        public function addbngmsk(){
            $benang_masuk= BenangMasuk::with('benang')->get();
            return view('gudang.benang.benang_tambah_masuk',['benangmasuk'=>$benang_masuk]);    
        }
        public function bngmsk(Request $request){
            // $bng = [
            //     'kode_benang'=> $request->input('kode_benang'),
            //     'color'=> $request->input('color'),
            //     'stok_sekarang'=> $request->$masuk,
            //     'vendor_id'=> $request->input('vendor_id'),
            //     'suplayer_id'=> $request->input('suplayer_id'),
            //     'style_id'=> $request->input('style_id'),
            // ];           
            BenangMasuk::create($request->all());
            $benang= Benang::find($request->benang_id);
            $benang->update([
                'stok_sekarang'=>$request->qty+$benang->stok_sekarang
            ]);
            // Benang::create($bng);
            return redirect('/benang');

        }
        public function penjumlahan( Request $request){
            $tes=DB::select('benang* from users where active = ?', [1]);
            dd($tes);
        }
}