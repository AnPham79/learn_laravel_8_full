<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if (session()->has('notifications'))
        <span style="color: green">{{ session('notifications') }}</span>
    @endif
    <h1>Danh sách nội dung</h1>
    <a href="{{ route('form-insert') }}">
        Thêm nội dung
    </a>

    @foreach ($data as $item)
        <h2>{{ $item->title }}</h2>
        <p>{{ $item->body }}</p>
        <a href="{{ route('view-post', ['id' => $item->id]) }}">Xem</a>
        <a href="{{ route('form-edit', ['id' => $item->id]) }}">Sửa</a>
        <form action="{{ route('delete-post', ['id' => $item->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Xóa</button>
        </form>
    @endforeach

</body>

</html>
