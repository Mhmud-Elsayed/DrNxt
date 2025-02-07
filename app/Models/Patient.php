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
            Branch::class,  // Target model
            Clinic::class,  // Intermediate model
            'id',           // Foreign key on the clinics table (primary key of Clinic)
            'clinic_id',    // Foreign key on the branches table linking to clinics
            'clinic_id',    // Foreign key on the patients table linking to clinics
            'id'            // Primary key of Clinic
        );
    }

}
