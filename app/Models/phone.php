<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    use HasFactory;

    protected $table = 'phones';

    public function student() {
        return $this->belongsTo('App\Models\student');
    }
}
