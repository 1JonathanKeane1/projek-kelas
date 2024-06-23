<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        "idPaket",
        "idUser",
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'idPaket');
    }

    
    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }
}
