<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeplane extends Model
{
    use HasFactory;
    protected $table = 'typePlanes';
    protected $fillable = ['name'];

    public function Plane()
    {
        return $this->hasMany(Plane::class);
    } 
}
