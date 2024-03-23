<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index()
    {
        echo 'Fluent Strings';

        $originalString = 'Chào mừng đến với trang web anh ba chà cú';

        $slice = Str::of($originalString)->after('anh ba chà cú');

        echo $slice;

        echo '</br>';
        // lấy phần cuối cùng
        $slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');

        echo $slice2;

        // sử dụng append nó thêm 1 chuổi mới chứ không ghi đè
        $slice3 = Str::of('Hello')->append('Word');
        echo '</br>';
        echo $slice3;

        // đổi chử hoa thành chữ thường
        $slice4 = Str::of('LARAVEL 8')->lower();
        echo '</br>';
        echo $slice4;

        // cập nhập
        $slice5 = Str::of('i learn laravel 7.0')->replace('7.0', '8.0');
        echo '</br>';
        echo $slice5;

        // đổi thành chử hoa tiêu ( viết hoa chử cái đầu)
        $slice6 = Str::of('i learn laravel 8.0')->title();
        echo '</br>';
        echo $slice6;

        // slug chuổi kí tự được viết theo kiểu con óc sên (chèn -)
        $slice7 = Str::of('i learn laravel 8.0')->slug();
        echo '</br>';
        echo $slice7;

        // lấy 1 phần của 1 chuổi từ vị trí mà ta quy định
        $slice8 = Str::of('i learn laravel 8.0')->substr(5);
        echo '</br>';
        echo $slice8;

        // sử dụng hàm trim để loại bỏ khoảng trắng giữa các kí tự
        $slice9 = Str::of('/i/learn/laravel/8.0/')->trim('/');
        echo '</br>';
        echo $slice9;

        // úp pô để nâng cấp ae từ chử thường lên chữ hoa
        $slice10 = Str::of('i learn laravel 8.0')->upper();
        echo '</br>';
        echo $slice10;
    }
}
