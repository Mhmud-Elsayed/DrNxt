<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class Patient extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'clinic_id',
        'name',
        'email',
        'phone',
        'dob',
        'address',
    ];
    protected $dates = ['deleted_at']; 
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
    }public function allergies()
    {
        return $this->belongsToMany(Allergy::class, 'allergy_patient')->withTimestamps();
    }

    public function patientAllergies(): HasMany
    {
        return $this->hasMany(AllergyPatient::class);
    }
}
