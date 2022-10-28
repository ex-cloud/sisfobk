<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = "konseling_group";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tanggal', 'pertemuan', 'waktu', 'tempat', 'pendekatan', 'hasil', 'id_siswa', 'guru'
    ];

    public  function siswa(){
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}
