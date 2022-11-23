<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trailer extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',
        'body',
        'reg_number',
        'chassis_number',
        'country_of_manu',
        'country_code',
        'y_o_m',
        'value',
        'currency',
        'insurance',
        'permit_id'
    ];

    public function permit()
    {
        return $this->belongsTo(Permit::class);
    }
}
