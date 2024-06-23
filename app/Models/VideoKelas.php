<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoKelas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        "idKelas",
        "video",
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'idKelas');
    }

    public function waktu(){
        return $this->hasMany(Durasi::class, 'idVideo');
    }
}
