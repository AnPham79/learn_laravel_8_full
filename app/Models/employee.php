<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class employee extends Model
{
    use HasFactory;

    public static function getEmployee() {
        $records =  DB::table('employees')->select('id', 'name', 'email', 'phone', 'department')->get()->toArray();
    }
    
}
