<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['nama'];

    public function detail(){
        return $this->hasMany(DetailVideo::class, 'idVideo');
    }
}
