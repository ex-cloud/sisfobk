<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Siswa extends Model
{
    use Sortable;

    protected $table = "siswa";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nis', 'nama', 'kelas', 'id_jurusan'
    ];

    public $sortable = [
        'nama', 'kelas', 'id_jurusan'
    ];

    public function jurusan(){
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }

    public function visit(){
        return $this->hasMany(Visit::class, 'id_siswa', 'id');
    }

    public function individual(){
        return $this->hasMany(Individual::class, 'id_siswa', 'id', 'nama');
    }

    public function group(){
        return $this->hasMany(Group::class, 'id_siswa', 'id');
    }

    public function cases(){
        return $this->hasMany(Cases::class, 'id_siswa', 'id');
    }

    

    // public $sortable = ['nis', 'nama', 'kelas', 'jurusan' ,'created_at', 'updated_at']
    

}

