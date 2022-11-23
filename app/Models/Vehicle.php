<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',
        'body',
        'reg_number',
        'chassis_number',
        'engine_number',
        'engine_capacity',
        'country_of_manu',
        'country_code',
        'y_o_m',
        'value',
        'currency',
        'insurance',
        'permit_id',
        'owner_id'
    ];

    public function permit()
    {
        return $this->belongsTo(Permit::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
