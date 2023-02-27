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
        Schema::create('label_masuk', function (Blueprint $table) {
            $table->id();
            $table->integer('ex')->nullable();
            $table->integer('s')->nullable();
            $table->integer('m')->nullable();
            $table->integer('l')->nullable();
            $table->integer('xl')->nullable();
            $table->integer('xxl')->nullable();
            $table->integer('xxxl')->nullable();
            $table->integer('lp')->nullable();
            $table->integer('xlp')->nullable();
            $table->foreignId('label_id')->constrained('label')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('label_masuk');
    }
};
