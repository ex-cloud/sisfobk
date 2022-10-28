<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use HasFactory;

    protected $table = "jurnal";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tanggal', 'sasaran_kegiatan', 'layanan_kegiatan', 'hasil_kegiatan', 'guru'
    ];
}
