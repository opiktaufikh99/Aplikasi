<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cutting', function (Blueprint $table) {
            $table->id();
            $table->string('kode_cutting')->unique();
            $table->string('nama');
            $table->foreignId('cutting_masuk')->constrained('cutting_masuk')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('stok_roll')->nullable();
            $table->integer('stok_yard')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operator');
    }
};