<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $table = "visit_report";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'bidang_layanan', 'fungsi_layanan', 'topik', 'tujuan_kegiatan', 'gambaran', 'alamat', 'tanggal', 'lama_kunjungan','anggota_keluarga', 'evaluasi', 'tindak_lanjut', 'catatan', 'id_siswa', 'guru',
    ];

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}
