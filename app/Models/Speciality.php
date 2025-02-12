<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    protected $fillable = ['name', 'description','ar_name','is_active','ar_description'];

    public function doctors(){
        return $this->hasMany(Doctor::class);
    }


}
