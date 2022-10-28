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
        Schema::create('konseling_indv', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('pertemuan');
            $table->time('waktu');
            $table->string('tempat');
            $table->string('pendekatan');
            $table->longtext('hasil');
            $table->integer('id_siswa');
            $table->string('guru');
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
        Schema::dropIfExists('lap_konseling_indv');
    }
};
