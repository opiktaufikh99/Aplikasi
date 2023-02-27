<?php

namespace Database\Seeders;

use App\Models\BuyerModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class buyer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        BuyerModel::truncate();
        Schema::enableForeignKeyConstraints();
                $data=[
            ['name'=>'shinsung','email'=>'shinsgung@','no_tlpan'=>'09009','alamat'=>'sukabumi'],
            ['name'=>'wolmart','email'=>'wolmart@','no_tlpan'=>'2122','alamat'=>'cicantayan'],
            ['name'=>'sea','email'=>'sea@','no_tlpan'=>'0990','alamat'=>'cijalingan'],
    ];
    foreach ( $data As $item){
        BuyerModel::insert([
            'name'=>$item['name'],
            'email'=>$item['email'],
            'no_tlpan'=>$item['no_tlpan'],
            'alamat'=>$item['alamat'],
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()

        ]);
    }
        
    }
}