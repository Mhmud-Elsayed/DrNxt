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
        Patient::class,
        Clinic::class,
        'id',
        'clinic_id',
        'clinic_id',
        'id',
    );
}
}
