<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'address'];
    public function clinic()
{
    return $this->belongsTo(Clinic::class);
}
public function users()
{
    return $this->belongsToMany(User::class, 'user_branch');
}
public function patients()
{
    return $this->hasManyThrough(
        Patient::class,  // Target model
        Clinic::class,   // Intermediate model
        'id',            // Foreign key on clinics table (Primary key of Clinic)
        'clinic_id',     // Foreign key on patients table linking to clinics
        'clinic_id',     // Foreign key on branches table linking to clinics
        'id'             // Primary key of Clinic
    );
}
}
