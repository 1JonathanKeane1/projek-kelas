<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBenefit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['idBenefit', 'judul', 'isi'];

    public function benefit (){
    	return $this->belongsTo(Benefit::class, 'idBenefit');
    }
}
