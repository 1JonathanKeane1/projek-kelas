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
        "harga",
        "harga_lama",
    ];

    public function kelas (){
    	return $this->hasMany(Kelas::class, 'idPaket');
    }

    public function detailpaket (){
    	return $this->hasMany(DetailPaket::class, 'idPaket');
    }

    public function pembelian()
    {
        return $this->hasMany(Pembelian::class, 'idPaket');
    }
}
