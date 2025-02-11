<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'specialization'];



    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
