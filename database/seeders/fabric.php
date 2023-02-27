<?php

namespace Database\Seeders;

use App\Models\Fabric as fabric1;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Carbon;

class fabric extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Fabric1::truncate();
        Schema::enableForeignKeyConstraints();
        $Data=[
            ['kode_fabric'=>'111','color'=>'red','vendor_id'=>1,'style_id'=>1,'suplayer_id'=>2],
            ['kode_fabric'=>'121','color'=>'black','vendor_id'=>2,'style_id'=>1,'suplayer_id'=>1],
            ['kode_fabric'=>'131','color'=>'white','vendor_id'=>3,'style_id'=>2,'suplayer_id'=>3],
            ['kode_fabric'=>'141','color'=>'red','vendor_id'=>1,'style_id'=>3,'suplayer_id'=>1],
            ['kode_fabric'=>'151','color'=>'blue','vendor_id'=>2,'style_id'=>3,'suplayer_id'=>4],
            ['kode_fabric'=>'161','color'=>'yellow','vendor_id'=>1,'style_id'=>2,'suplayer_id'=>1],
        ];
    foreach ( $Data as $item){
        fabric1::insert([
            'kode_fabric'=>$item['kode_fabric'],
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