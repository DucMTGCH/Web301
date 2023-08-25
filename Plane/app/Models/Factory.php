<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    use HasFactory;
    protected $table = 'factories';
    protected $fillable = [
     'name',
     'email',
     'phonenumber',
     'nationality',
    ];

    public function Plane()
{
    return $this->belongsToMany(Plane::class);
}

}
