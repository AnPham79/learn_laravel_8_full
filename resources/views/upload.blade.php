<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Upload ảnh
    <br>
    <form action="{{ route(('upload.UploadFile')) }}" method="POST" enctype="multipart/form-data">
        @csrf
        Chọn ảnh của bạn tại đây
        <br>
        <input type="file" name="file">
        <br>
        <button>submit</button>
    </form>
</body>
</html>