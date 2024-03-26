<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\role;
use App\Models\student;

class RoleController extends Controller
{
    public function addRole() {
        $roles = [
            ["name" => "Admin"],
            ["name" => "SuperAdmin"],
            ["name" => "SupperSupperAdmin"],
            ["name" => "Staff"],
            ["name" => "User"],
            ["name" => "Yasuo"],
        ];

        role::insert($roles);

        return "Chúc mừng bạn đã thêm role thành công";
    }

    public function addStudent(Request $request) {
        $student = new student;
        $student->name = 'johng';
        $student->email = 'johng@gmail.com';
        $student->score = 9;
        $student->save();

        $rolesId = [1, 2];
        $student->roles()->attach($rolesId);
        return "sinh viên cùng với bản ghi user id đã đucợ thêm";
    }
}
