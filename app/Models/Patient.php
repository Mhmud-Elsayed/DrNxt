<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinic_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'dob',
        'address',
    ];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }
    public function branch()
    {
        return $this->hasManyThrough(
            Branch::class,
            Clinic::class,
            'id',
            'clinic_id',
            'clinic_id',
            'id',
        );
    }

}
