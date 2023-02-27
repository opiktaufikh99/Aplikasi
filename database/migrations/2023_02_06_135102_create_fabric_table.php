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
        Schema::create('fabric', function (Blueprint $table) {
            $table->id();
            $table->string('kode_fabric');
            $table->integer('stok_roll')->nullable();
            $table->integer('stok_yard')->nullable();
            $table->string('color')->nullable();
            $table->unsignedBigInteger('vendor_id');
            $table->foreign('vendor_id')->references('id')->on('vendor')->onDelete('restrict')->onUpdate('CASCADE');
            $table->unsignedBigInteger('style_id');
            $table->foreign('style_id')->references('id')->on('style')->onDelete('restrict')->onUpdate('CASCADE');
            $table->unsignedBigInteger('suplayer_id');
            $table->foreign('suplayer_id')->references('id')->on('suplayer')->onDelete('restrict')->onUpdate('CASCADE');
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
        Schema::dropIfExists('fabric');
    }
};