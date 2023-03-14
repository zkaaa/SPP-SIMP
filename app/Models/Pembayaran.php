<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = "pembayaran";

    protected $primaryKey = 'id_pembayaran';

    protected $fillable = [
        'nama',
        'id_petugas',
        'id_siswa',
        'id_spp',
        // 'id_month',
        'tanggal',
        'bulan_dibayar',
        'tahun_dibayar',
        'jumlah_bayar',
        
    ];

    public function siswa()
    {
        return $this->belongsTo(User::class, 'id_siswa');
    }

    public function petugas()
    {
        return $this->belongsTo(User::class, 'id_petugas');
    }

    // public function month()
    // {
    //     return $this->belongsTo(Month::class, 'id_month', 'id_month');
    // }
}
