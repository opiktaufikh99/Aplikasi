<?php

namespace App\Http\Controllers;

use App\Exports\vendorExport;
use App\Imports\vendorImport;
use App\Models\BuyerModel;
use App\Models\VendorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class VendorController extends Controller
{
    public function index(){
        $vendor = VendorModel::with('buyer')->get();
        return view('gudang.vendor1.vendor_index',
        ['vendor'=>$vendor]);
    }
    public function detail($id){
        $vendor = VendorModel::with('buyer')->findOrFail($id);
        return view('gudang.vendor1.vendor_show',compact('vendor'));
    }
    public function export(){
        return Excel::download(new vendorExport,'vendor-'.Carbon::now()->timestamp.'.xlsx');
    }
    public function import( Request $request){
        Excel::import(new vendorImport, $request->file('file'));
        return  redirect('/vendor');

    }
    public function create(){
        $vendor=VendorModel::get();
        $buyer=BuyerModel::select('id','name')->get();
        return view('gudang.vendor1.vendor_create',[
            'vendor'=>$vendor,
             'buyer'=>$buyer
        ]);
    }
    public function store(Request $request){
        $vendor = new VendorModel();
        $vendor->name=$request->name;
        $vendor->email=$request->email;
        $vendor->no_tlpan=$request->no_tlpan;
        $vendor->buyer_id=$request->buyer_id;
        $vendor->alamat=$request->alamat;
        $vendor->save();
        return redirect('/vendor');
    }
    public function edit($id){
        $vendor=VendorModel::findOrFail($id);
        $buyer=BuyerModel::where('id','!=',$vendor->buyer->id)->get(['id','name']);
        return view('gudang.vendor1.vendor_edit',[
            'vendor'=>$vendor,
             'buyer'=>$buyer
            ]
        );
    }
    public function update(Request $request, $id){
        $vendor = VendorModel::findOrfail($id);
        $vendor->name=$request->name;
        $vendor->email=$request->email;
        $vendor->no_tlpan=$request->no_tlpan;
        $vendor->buyer_id=$request->buyer_id;
        $vendor->alamat=$request->alamat;
        $vendor->save();
        return redirect('/vendor');
    }
    public function delete($id){
        $vendor=VendorModel::findOrfail($id);
        return view('gudang.vendor1.vendor_delete',[
            'vendor'=>$vendor
        ]);
    }
    public function destroy($id){
        $delete=DB::table('vendor')->where('id',$id)->delete();
        return redirect('/vendor');
    }
}