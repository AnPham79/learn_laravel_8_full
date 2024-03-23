<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $fruits = array('apple', 'orange', 'banana', 'mango', 'kiwi', 'thao', 'ngan', 'chau');
        return view('welcome', compact('fruits'));
    }
}
