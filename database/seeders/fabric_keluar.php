<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Fabric_Keluar as ModelsFabric_Keluar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class fabric_keluar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
     ModelsFabric_Keluar::truncute();
     Schema::enableForeignKeyConstraints();
     $data=[
        ['yard'=>100,'roll'=>2020,'fabric_id'=>1],
        ['yard'=>150,'roll'=>200,'fabric_id'=>2],
        ['yard'=>100,'roll'=>620,'fabric_id'=>3],
        ['yard'=>100,'roll'=>6020,'fabric_id'=>2],
        ['yard'=>100,'roll'=>2020,'fabric_id'=>1],
     ];
     foreach ( $data As $item){
        ModelsFabric_Keluar::insert([
            'yard'=>$item['yard'],
            'roll'=>$item['roll'],
            'fabric_id'=>$item['fabric_id'],
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
    }
}