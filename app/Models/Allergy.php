<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'ar_name',
        'ar_description',
    ];
    public function patients()
{
    return $this->belongsToMany(Patient::class);
}
}
