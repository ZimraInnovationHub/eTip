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
        'permit_id'
    ];

    public function vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }

    public function permit()
    {
        return $this->belongsTo(Permit::class);
    }
}
