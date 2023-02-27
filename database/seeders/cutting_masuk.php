<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\cutting_masuk as ModelsCutting_masuk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class cutting_masuk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        ModelsCutting_masuk::truncate();
        Schema::enableForeignKeyConstraints();
        $Data=[
            ['roll_cut'=>190,'yard_cut'=>1065,'fabric_keluar'=>3],
            ['roll_cut'=>10,'yard_cut'=>103,'fabric_keluar'=>1],
            ['roll_cut'=>790,'yard_cut'=>103,'fabric_keluar'=>2],
            ['roll_cut'=>170,'yard_cut'=>103,'fabric_keluar'=>3],
            ['roll_cut'=>190,'yard_cut'=>10,'fabric_keluar'=>3],
        ];
        foreach($Data as $item){
            ModelsCutting_masuk::insert([ 
            'yard_cut'=>$item['yard_cut'],
            'roll_cut'=>$item['roll_cut'],
            'fabric_keluar'=>$item['fabric_keluar'],
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()]);
        }
    }
}