<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Services\DataTables;

class UserController extends Controller
{
    public function index(Request $request) {
        return $request->fullUrl();
    }

    public function search() {
        return view('search');
    }

    public function autocomplete(Request $request) {
        $data = User::select('name')
            ->where("name", "like", "%{$request->term}%")
            ->get();
        return response()->json($data);
    }
}
