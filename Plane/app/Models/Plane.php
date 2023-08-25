<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    use HasFactory;
    protected $table = 'planes';
    protected $fillable = [
        'name', 'national_id', 'type_id','description','color'
    ];

    public function Factories()
    {
        return $this->belongsToMany(Factory::class);
    }

    public function National(){
        return $this->belongsTo(National::class);
    }

    public function Type(){
        return $this->belongsTo(Type::class);
    }
}
