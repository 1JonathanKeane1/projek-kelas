<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPaket extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['idPaket', 'isi'];

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'idPaket');
    }
}
