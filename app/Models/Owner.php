<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastname',
        'firstname',
        'country',
        'address',
    ];

    public function vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }
}
