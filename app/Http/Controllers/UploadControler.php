<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadControler extends Controller
{
    public function UploadForm() {
        return view('upload');
    }

    public function UploadFile(Request $request) {
        $file_upload = $request->file->store('public');

        return "file đã được upload thành công" . $file_upload;
    }
}
