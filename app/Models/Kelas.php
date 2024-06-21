<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['kelas'];

    public function paket(){
        return $this->hasMany(Paket::class, 'idKelas');
    }
}
