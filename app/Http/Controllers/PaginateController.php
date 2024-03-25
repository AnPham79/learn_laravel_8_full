<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Pagination\Paginator;

class PaginateController extends Controller
{
    public function getAllUser() {
        Paginator::useBootstrap();

        $data = User::paginate(10);
        
        return view('paginate', compact('data'));
    }
}

