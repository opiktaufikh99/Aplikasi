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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->string('alamat');
            $table->string('email')->unique();
            $table->integer('no_tlpan');
            $table->string('gambar')->nullable();
            $table->foreignId('jabatan_id')->constrained('jabatan')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('bagian_id')->constrained('bagian')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('roll_id')->constrained('roll')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};