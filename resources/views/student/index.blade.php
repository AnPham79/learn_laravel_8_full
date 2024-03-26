<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('student.create') }}">
        thêm sinh viên
    </a>
    <br>
    @if(session()->has('success'))
        <span style="color: green">{{  session()->get('success') }}</span>
    @endif
    <br>
    <table>
        <tr>
            <td>#</td>
            <td>Tên</td>
            <td>Email</td>
            <td>score</td>
            <td>Sửa và xóa</td>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->score }}</td>
            <td>
                <a href="{{ route('student.edit', ['id' => $item->id]) }}">
                    Sửa
                </a>
                <a href="{{ route('student.destroy', ['id' => $item->id]) }}">
                    Xóa
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>