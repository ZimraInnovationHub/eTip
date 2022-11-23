<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'serial_number',
        'value',
        'currency',
        'permit_id'
    ];

    public function permit()
    {
        return $this->belongsTo(Permit::class);
    }
}
