<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
        buyer::class,
        vendor::class,
        style::class,
        suplayer::class,
        fabric::class,
        fabric_masuk::class,
        jabatan::class,
        bagian::class,
        fabric_keluar::class,
        roll::class,
        benang::class,
        benang_masuk::class,
        cutting_masuk::class,
        cutting::class,
        cutting_keluar::class
       ]);
    }
}