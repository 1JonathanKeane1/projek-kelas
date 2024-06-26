<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Durasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'idVideo',
        'idUser',
        'durasi',
    ];

    public function video(){
        return $this->belongsTo(VideoKelas::class, 'idVideo');
    }
}
