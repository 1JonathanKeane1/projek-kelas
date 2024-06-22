<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['kelas', 'idPaket', 'idMentor'];

    public function paket(){
        return $this->belongsTo(Paket::class, 'idPaket');
    }

    public function mentor(){
        return $this->belongsTo(Mentor::class, 'idMentor');
    }

    public function video(){
        return $this->hasMany(VideoKelas::class, 'idKelas');
    }
}
