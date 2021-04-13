<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table ="mahasiswas"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps = false;
    protected $primaryKey = 'Nim'; // Memanggil isi DB Dengan primarykey
    /**
    * The attributes that are mass assignable.
    * 
    * @var array
    */
    protected $fillable = [
        'Nim',
        'Nama',
        'kelas_id',
        'Jurusan',
        'No_Handphone',
        'email',
        'tanggal_lahir'
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function mahasiswamatakuliah(){
        return $this->hasMany(Mahasiswa_MataKuliah::class);
    }
}
