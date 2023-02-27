<?php

namespace Database\Seeders;

use App\Models\Bagian as ModelsBagian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class Bagian extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     Schema::disableForeignKeyConstraints();
     ModelsBagian::truncate();
     Schema::enableForeignKeyConstraints();
     $data=[
        ['bagian'=>'sewing'],
        ['bagian'=>'cutting'],
        ['bagian'=>'Gudang'],
        ['bagian'=>'Finishing'],
        ['bagian'=>'Quality Control'],
        ['bagian'=>'Embrodery'],
        ['bagian'=>'Mekanik'],
     ];
     foreach ($data as $item )
     ModelsBagian::insert([
        'bagian'=>$item['bagian'],
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
     ]);
    }
}