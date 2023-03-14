<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    use HasFactory;

    protected $table = 'months';
    protected $primaryKey = 'id_month';
    protected $fillable = [
        'month'
    ];

    // public function pembayaran()
    // {
    //     return $this->hasOne(Pembayaran::class, 'id_pembayaran', 'id_pembayaran');
    // }
}
