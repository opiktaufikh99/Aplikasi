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
        Schema::create('label', function (Blueprint $table) {
            $table->id();
            $table->string('kode_lable');
            $table->integer('s_ex')->nullable();
            $table->integer('s_s')->nullable();
            $table->integer('s_m')->nullable();
            $table->integer('s_l')->nullable();
            $table->integer('s_xl')->nullable();
            $table->integer('s_xxl')->nullable();
            $table->integer('s_xxxl')->nullable();
            $table->integer('s_lp')->nullable();
            $table->integer('s_xlp')->nullable();
            $table->integer('total_qty')->nullable();
            $table->foreignId('suplayer_id')->constrained('suplayer')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('style_id')->constrained('style')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('label');
    }
};