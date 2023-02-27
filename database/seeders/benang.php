<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Benang as ModelsBenang;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class benang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        ModelsBenang::truncate();
        Schema::enableForeignKeyConstraints();
        $Data=[
            ['kode_benang'=>'111','color'=>'red','vendor_id'=>1,'style_id'=>1,'suplayer_id'=>2],
            ['kode_benang'=>'121','color'=>'black','vendor_id'=>2,'style_id'=>1,'suplayer_id'=>1],
            ['kode_benang'=>'131','color'=>'white','vendor_id'=>3,'style_id'=>2,'suplayer_id'=>3],
            ['kode_benang'=>'141','color'=>'red','vendor_id'=>1,'style_id'=>3,'suplayer_id'=>1],
            ['kode_benang'=>'151','color'=>'blue','vendor_id'=>2,'style_id'=>3,'suplayer_id'=>4],
            ['kode_benang'=>'161','color'=>'yellow','vendor_id'=>1,'style_id'=>2,'suplayer_id'=>1],
        ];
    foreach ( $Data as $item){
        ModelsBenang::insert([
            'kode_benang'=>$item['kode_benang'],
            'color'=>$item['color'],
            'vendor_id'=>$item['vendor_id'],
            'style_id'=>$item['style_id'],
            'suplayer_id'=>$item['suplayer_id'],
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
    }
}