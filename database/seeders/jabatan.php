<?php

namespace Database\Seeders;

use App\Models\jabatan as ModelsJabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class jabatan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        ModelsJabatan::truncate();
        Schema::enableForeignKeyConstraints();
        $data=[
            ['jabatan'=>'operator'],
            ['jabatan'=>'supervisor'],
            ['jabatan'=>'chif'],
            ['jabatan'=>'assisten manajer'],
            ['jabatan'=>'manajer'],
        ];
        foreach ($data as $item)
ModelsJabatan::insert([
    'jabatan'=>$item['jabatan'],
    'created_at'=>Carbon::now(),
    'updated_at'=>Carbon::now()
]);
    }
}