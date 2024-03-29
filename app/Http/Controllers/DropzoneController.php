<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    public function dropzone() {
        return view('dropzone');
    }

    public function dropzoneStore(Request $request) {
        $image = $request->file('file');
        // tệp tải lên với tên là file, tên tệp mới đc thêm timestamp hiện tại + với phần mở rộng để chắc chắn rằng tên file là duy nhất
        $imageName = time() . '.' . $image->extension();
        // sau đó duy chuyển đến thư mục public trong đó có thư mục là images
        $image->move(public_path('images'), $imageName);
        // cuối cùng gửi 1 phản hồi json kết quả để xuất ra màn hình cho người dùng biết
        return response()->json(['success' => $imageName]);
    }
}
