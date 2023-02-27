<?php

namespace Database\Seeders;

use App\Models\Suplayer as ModelsSuplayer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class suplayer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        ModelsSuplayer::truncate();
        Schema::enableForeignKeyConstraints();
        $data=[
            ['nama'=>'uje','kode_supplayer'=>'Sup123','email'=>'uje@','no_tlpan'=>'01254'],
            ['nama'=>'ucup','kode_supplayer'=>'Sup122','email'=>'ucup@','no_tlpan'=>'02254'],
            ['nama'=>'boled','kode_supplayer'=>'Sup133','email'=>'boled@','no_tlpan'=>'03254'],
            ['nama'=>'nanang','kode_supplayer'=>'Sup143','email'=>'nanang@','no_tlpan'=>'04254'],
            ['nama'=>'baron','kode_supplayer'=>'Sup153','email'=>'baron@','no_tlpan'=>'05254'],
            ['nama'=>'akbar','kode_supplayer'=>'Sup163','email'=>'akbar@','no_tlpan'=>'06254'],
        ];
        foreach ($data as $item){
            ModelsSuplayer::insert([
                'nama'=>$item['nama'],
                'kode_supplayer'=>$item['kode_supplayer'],
                'email'=>$item['email'],
                'no_tlpan'=>$item['no_tlpan'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}