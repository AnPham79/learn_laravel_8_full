<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request) {
        if($request->session()->get('name')) {
            echo $request->session()->get('name');
        } else {
            echo 'không có dữ liệu được lưu trong session';
        }
    }

    public function storeSessionData(Request $request) {
        $request->session()->put('name', 'MrAn');
        echo 'Dữ liệu đã được thêm vào session';
    }

    public function deleteSessionData(Request $request) {
        $request->session()->forget('name');
        echo 'Dữ liệu đã được xóa khỏi session';
    }
}
