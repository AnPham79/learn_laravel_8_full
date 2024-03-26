<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\student;

class role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    public function students() {
        return $this->belongsToMany(student::class, 'role_students');
    }
}
