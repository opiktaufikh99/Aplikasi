<?php

namespace App\Http\Controllers;

use App\Models\cutting;
use Illuminate\Http\Request;

class CuttingController extends Controller
{
    public function index(){
        $cutting = cutting::all();
        return view('cutting.index.index',['cutting'=>$cutting]);
    }
}