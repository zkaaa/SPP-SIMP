<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = "siswa";

    protected $primaryKey = "nisn";

    protected $fillable = [
        'nisn',
        'nis',
        'nama', 
        'id_kelas', 
        'alamat', 
        'no_telp', 
        'id_spp'
    ];

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'nisn');
    }

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'id_kelas');
    }

    public function spp()
    {
        return $this->belongsTo(Spp::class, 'id_spp');
    }
}
