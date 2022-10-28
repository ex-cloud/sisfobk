<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;

    protected $table = "cases";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'tanggal', 'id_siswa', 'kasus', 'guru'
    ];

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}
