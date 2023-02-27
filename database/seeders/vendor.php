<?php

namespace Database\Seeders;

use App\Models\VendorModel;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class vendor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        VendorModel::truncate();
        Schema::enableForeignKeyConstraints();
        $data =[
            ['name'=>'jajang','email'=>'jajang@','no_tlpan'=>'9099','alamat'=>'sukabumi','buyer_id'=>1],
            ['name'=>'udin','email'=>'udin@','no_tlpan'=>'1231','alamat'=>'cibadak','buyer_id'=>2],
            ['name'=>'maman','email'=>'maman@','no_tlpan'=>'0909','alamat'=>'cibaraja','buyer_id'=>3],
            ['name'=>'deden','email'=>'deden@','no_tlpan'=>'902','alamat'=>'salakopi','buyer_id'=>3],
            ['name'=>'ujang','email'=>'ujang@','no_tlpan'=>'1121','alamat'=>'karadean','buyer_id'=>1],
        ];
        foreach($data as $item){
            VendorModel::insert([
                'name'=>$item['name'],
                'email'=>$item['email'],
                'no_tlpan'=>$item['no_tlpan'],
                'alamat'=>$item['alamat'],
                'buyer_id'=>$item['buyer_id'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}