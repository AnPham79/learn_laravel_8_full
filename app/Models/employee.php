<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class employee extends Model
{
    use HasFactory;

    public $fillable = [
        'name', 'email', 'phone', 'salary', 'department'
    ];

    public static function getEmployee() {
        $records =  DB::table('employees')->select('id', 'name', 'email', 'phone','salary', 'department')->get()->toArray();

        return $records;
    }
    
}
