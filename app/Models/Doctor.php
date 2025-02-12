<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'speciality_id',
        'user_id',
        'ar_name',
        'name',
        'phone',
        'image',
        'address',
        'is_active',
    ];

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
