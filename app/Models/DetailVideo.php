<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailVideo extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['link', 'idVideo', 'judul', 'deskripsi'];

    public function video(){
        return $this->belongsTo(Video::class, 'idVideo');
    }
}
