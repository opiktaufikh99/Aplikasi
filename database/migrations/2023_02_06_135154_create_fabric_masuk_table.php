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
        Schema::create('fabric_masuk', function (Blueprint $table) {
            $table->id();
            $table->integer('yard');
            $table->integer('roll');
            $table->unsignedBigInteger('fabric_id');
            $table->foreign('fabric_id')->references('id')->on('fabric')->onDelete('restrict')->onUpdate('CASCADE');
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
        Schema::dropIfExists('fabric_masuk');
    }
};
