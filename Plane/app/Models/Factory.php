<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    use HasFactory;
    protected $table = 'factorys';
    protected $fillable = ['name', 'email','phone number','nationality',];

    public function Plane()
{
    return $this->belongsToMany(Plane::class);
}

}
