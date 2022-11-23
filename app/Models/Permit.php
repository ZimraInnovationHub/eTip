<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permit extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'lastname',
        'firstname',
        'email',
        'phone',
        'address',
        'passport',
        'country',
        'intended_country',
        'intended_address',
        'intended_code',
        'intended_date_of_travel',
        'intended_port',
        'intended_port_code',
    ];

    public function vehicle()
    {
        return $this->hasOne(Vehicle::class);
    }

    public function trailer()
    {
        return $this->hasOne(Trailer::class);
    }

    public function goods()
    {
        return $this->hasMany(Good::class);
    }
}
