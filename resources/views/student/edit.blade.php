<h1>Đây là form sửa sinh viên</h1>
<br>
<form action="{{ route('student.update', ['id' => $data->id]) }}" method="POST">
    @csrf
    @method('PUT')
    Tên
    <br>
    <input type="text" name="name" value="{{ $data->name }}">
    <br>
    Email
    <br>
    <input type="email" name="email" value="{{ $data->email }}">
    <br>
    Điểm
    <br>
    <input type="text" name="score" value="{{ $data->score }}">
    <br>
    <button>Sửa sinh viên</button>
</form>
