<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use App\Models\roll as ModelsRoll;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class roll extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        ModelsRoll::truncate();
        Schema::enableForeignKeyConstraints();
        $Data=[
            ['roll'=>'admin'],
            ['roll'=>'operator'],
            ['roll'=>'staff'],
            ['roll'=>'chif'],
        ];
        foreach($Data as $item){
            ModelsRoll::insert([
            'roll'=>$item['roll'],
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()]);
        }
    }
}