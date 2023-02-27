<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\cutting_keluar as ModelsCutting_keluar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class cutting_keluar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     Schema::disableForeignKeyConstraints();
     ModelsCutting_keluar::truncute();
     Schema::enableForeignKeyConstraints();
     $data=[
        ['keluar'=>100,'cutting_id'=>1],
        ['keluar'=>90,'cutting_id'=>2],
        ['keluar'=>100,'cutting_id'=>3],
        ['keluar'=>100,'cutting_id'=>3],
        ['keluar'=>50,'cutting_id'=>2],
        ['keluar'=>80,'cutting_id'=>1],
     ];
     foreach ( $data As $item){
        ModelsCutting_keluar::insert([
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