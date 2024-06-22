<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['mentor'];

    public function kelas(){
        return $this->hasMany(Kelas::class, 'idMentor');
    }
}
