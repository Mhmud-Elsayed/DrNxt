<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class AllergyPatient extends Model
{
    protected $table = 'allergy_patient'; // Specify the pivot table name

    protected $fillable = ['patient_id', 'allergy_id']; // Allow mass assignment

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function allergy(): BelongsTo
    {
        return $this->belongsTo(Allergy::class);
    }}
