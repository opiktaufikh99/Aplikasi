<?php

namespace Database\Seeders;

use App\Models\StyleModel;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class style extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        StyleModel::truncate();
        Schema::enableForeignKeyConstraints();
        $data=[
            ['kode_style'=>'1995','style'=>'995','color'=>'red','vendor_id'=>1],
            ['kode_style'=>'223','style'=>'22','color'=>'blue','vendor_id'=>2],
            ['kode_style'=>'432','style'=>'777','color'=>'white','vendor_id'=>1],
            ['kode_style'=>'433','style'=>'9678','color'=>'black','vendor_id'=>2],
            ['kode_style'=>'195','style'=>'76','color'=>'black','vendor_id'=>4],
            ['kode_style'=>'9495','style'=>'35','color'=>'green','vendor_id'=>2],
            ['kode_style'=>'145','style'=>'34','color'=>'yellow','vendor_id'=>3],
            ['kode_style'=>'155','style'=>'29','color'=>'salmon','vendor_id'=>5],
            ['kode_style'=>'194','style'=>'55','color'=>'danger','vendor_id'=>5],
            ['kode_style'=>'1395','style'=>'923','color'=>'primary','vendor_id'=>4],
            ['kode_style'=>'1195','style'=>'927','color'=>'warning','vendor_id'=>3],
            ['kode_style'=>'19335','style'=>'33','color'=>'orange','vendor_id'=>2],
            ['kode_style'=>'343','style'=>'23','color'=>'orange','vendor_id'=>1],
            ['kode_style'=>'4343','style'=>'42','color'=>'red','vendor_id'=>1],
            ['kode_style'=>'22','style'=>'2','color'=>'red','vendor_id'=>2],
            ['kode_style'=>'1332','style'=>'32','color'=>'red','vendor_id'=>3],
            ['kode_style'=>'133','style'=>'13','color'=>'red','vendor_id'=>4],
            ['kode_style'=>'1223','style'=>'12','color'=>'red','vendor_id'=>2]
        ];
        foreach ($data as $item){
            StyleModel::insert([
                'kode_style'=>$item['kode_style'],
                'style'=>$item['style'],
                'color'=>$item['color'],
                'vendor_id'=>$item['vendor_id'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}