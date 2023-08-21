<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    use HasFactory;
    protected $table = 'planes';
    protected $fillable = [
        'name', 'factory_id', 'national_id', 'typePlane_id',
    ];

    public function Factory()
    {
        return $this->belongsToMany(Factory::class);
    }

    public function National(){
        return $this->belongsTo(National::class);
    }

    public function typePlane(){
        return $this->belongsTo(typePlane::class);
    }
}
