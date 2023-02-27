<?php

namespace Database\Seeders;

use Database\Seeders\benang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\BenangMasuk;
use Illuminate\Support\Carbon;

class benang_masuk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        BenangMasuk::truncate();
        Schema::enableForeignKeyConstraints();
        $Data=[
            ['qty'=>12,'benang_id'=>1],
            ['qty'=>12,'benang_id'=>6],
            ['qty'=>12,'benang_id'=>1],
            ['qty'=>12,'benang_id'=>4],
            ['qty'=>128,'benang_id'=>3],
            ['qty'=>128,'benang_id'=>2],
            ['qty'=>125,'benang_id'=>2],
            ['qty'=>12,'benang_id'=>4],
            ['qty'=>12,'benang_id'=>2],
            ['qty'=>12,'benang_id'=>3],
            ['qty'=>12,'benang_id'=>1],
            ['qty'=>12,'benang_id'=>1],
            ['qty'=>12,'benang_id'=>3],
            ['qty'=>1552,'benang_id'=>2],
        ];
        foreach ($Data as $item)
        BenangMasuk::insert([
            'qty'=>$item['qty'],
            'benang_id'=>$item['benang_id'],
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}