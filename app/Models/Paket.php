<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        "paket",
        "idKelas",
        "harga",
    ];

    public function kelas (){
    	return $this->belongsTo(Kelas::class, 'idKelas');
    }
}
