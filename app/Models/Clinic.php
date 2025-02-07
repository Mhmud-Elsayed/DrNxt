<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'address', 'logo'];
    public function branches()
{
    return $this->hasMany(Branch::class);
}
public function user()
{
    return $this->hasOne(User::class);
}
}
