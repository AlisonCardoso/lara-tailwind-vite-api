<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_Vehicle extends Model
{
    use HasFactory;
    protected $fillable = ['type'];

    public function vehicle()
     {
         return $this->belongsTo(Vehicle::class);
     }

}
