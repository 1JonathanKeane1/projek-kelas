<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['benefit'];

    public function detail(){
        return $this->hasMany(DetailBenefit::class, 'idBenefit');
    }
}
