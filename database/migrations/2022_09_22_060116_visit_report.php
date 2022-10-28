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
        Schema::create('visit_report', function (Blueprint $table) {
            $table->id();
            $table->string('bidang_layanan');
            $table->string('fungsi_layanan');
            $table->string('topik');
            $table->longText('tujuan_kegiatan');
            $table->longtext('gambaran');
            $table->string('alamat');
            $table->date('tanggal');
            $table->string('lama_kunjungan');
            $table->string('anggota_keluarga');
            $table->longtext('evaluasi');
            $table->longtext('tindak_lanjut');
            $table->longtext('catatan');
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
        Schema::dropIfExists('visit_report');
    }
};
