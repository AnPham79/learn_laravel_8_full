<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\role;

class student extends Model
{
    use HasFactory;

    protected $table = 'students';

    public function phone() {
        return $this->hasOne('App\Models\phone');
    }

    public function roles() {
        return $this->belongsToMany(role::class, 'role_students');
    }
}
