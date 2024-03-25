<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendMail() {
        $details = [
            'title' => 'Email được gửi bởi Anh An lão gia',
            'body' => 'Nội dung thư: test chức năng gửi mail bằng laravel'
        ];

        Mail::to('phamngocbaoan792004@gmail.com')->send(new TestMail($details));
        return 'email đã được gửi';
    }
}
