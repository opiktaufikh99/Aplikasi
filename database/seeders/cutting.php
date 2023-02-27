<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\cutting as ModelsCutting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class cutting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        ModelsCutting::truncate();
       Schema::enableForeignKeyConstraints();
       $Data=[
          ['kode_cutting'=>'cut111','nama'=>'toni','cutting_masuk'=>3,'stok_roll'=>12,'stok_yard'=>10],
          ['kode_cutting'=>'cut121','nama'=>'toni','cutting_masuk'=>2,'stok_roll'=>12,'stok_yard'=>10],
          ['kode_cutting'=>'cut131','nama'=>'','cutting_masuk'=>1,'stok_roll'=>12,'stok_yard'=>10],
          ['kode_cutting'=>'cut141','nama'=>'maman','cutting_masuk'=>1,'stok_roll'=>12,'stok_yard'=>10],
          ['kode_cutting'=>'cut151','nama'=>'udin','cutting_masuk'=>3,'stok_roll'=>12,'stok_yard'=>10],
       ];
   foreach ( $Data as $item){
       ModelsCutting::insert([
          'kode_cutting'=>$item['kode_cutting'],
          'nama'=>$item['nama'],
          'cutting_masuk'=>$item['cutting_masuk'],
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
   }  
    }
}