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
        Schema::create('benanglog', function (Blueprint $table) {
            $table->unsignedBigInteger('benangmasuk_id');
            $table->foreign('benangmasuk_id')->references('id')->on('benang_masuk')->onDelete('restrict');
            $table->unsignedBigInteger('BenangKeluar_id');
            $table->foreign('BenangKeluar_id')->references('id')->on('benang_keluar')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('benanglog');
    }
};
