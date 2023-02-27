<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Fabric_Masuk as ModelsFabric_Masuk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class fabric_masuk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        ModelsFabric_Masuk::truncate();
        Schema::enableForeignKeyConstraints();
        $Data=[
            ['roll'=>100,'yard'=>100,'fabric_id'=>1],
            ['roll'=>18,'yard'=>10,'fabric_id'=>1],
            ['roll'=>100,'yard'=>190,'fabric_id'=>1],
            ['roll'=>1014,'yard'=>100,'fabric_id'=>1],
            ['roll'=>60,'yard'=>100,'fabric_id'=>1],
            ['roll'=>100,'yard'=>105,'fabric_id'=>1],
            ['roll'=>1990,'yard'=>190,'fabric_id'=>1],
            ['roll'=>190,'yard'=>10,'fabric_id'=>3],
            ['roll'=>190,'yard'=>10,'fabric_id'=>5],
            ['roll'=>190,'yard'=>10,'fabric_id'=>5],
            ['roll'=>190,'yard'=>10,'fabric_id'=>6],
            ['roll'=>190,'yard'=>10,'fabric_id'=>1],
            ['roll'=>190,'yard'=>10,'fabric_id'=>6],
            ['roll'=>190,'yard'=>10,'fabric_id'=>5],
            ['roll'=>190,'yard'=>10,'fabric_id'=>4],
            ['roll'=>190,'yard'=>10,'fabric_id'=>3],
            ['roll'=>190,'yard'=>950,'fabric_id'=>2],
            ['roll'=>190,'yard'=>10,'fabric_id'=>1],
            ['roll'=>190,'yard'=>19,'fabric_id'=>3],
            ['roll'=>190,'yard'=>10,'fabric_id'=>2],
            ['roll'=>190,'yard'=>19,'fabric_id'=>3],
            ['roll'=>190,'yard'=>80,'fabric_id'=>1],
            ['roll'=>990,'yard'=>10,'fabric_id'=>3],
            ['roll'=>990,'yard'=>80,'fabric_id'=>4],
            ['roll'=>190,'yard'=>10,'fabric_id'=>3],
            ['roll'=>190,'yard'=>10,'fabric_id'=>2],
            ['roll'=>100,'yard'=>100,'fabric_id'=>2],
        ];
        foreach($Data as $item){
            ModelsFabric_Masuk::insert([ 
            'yard'=>$item['yard'],
            'roll'=>$item['roll'],
            'fabric_id'=>$item['fabric_id'],
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()]);
        }
    }
}