<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Petugas extends Model
{
    use HasFactory;
    use HasRoles;
    
    protected $table = "petugas";
    
    protected $primaryKey = 'id_petugas';

    protected $fillable = [
        'username',
        'password',
        'nama_petugas',
        'level'
    ];

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'id_petugas');
    }
}
