<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    use HasFactory;

    protected $table = "konseling_indv";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tanggal', 'pertemuan', 'waktu', 'tempat', 'pendekatan', 'hasil', 'id_siswa', 'guru'
    ];

    public  function siswa(){
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id', 'nama');
    }
}
