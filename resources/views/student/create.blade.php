<h1>Đây là form thêm sinh viên</h1>
<br>
<form action="{{ route('student.store') }}" method="POST">
    @csrf
    Tên
    <br>
    <input type="text" name="name">
    <br>
    Email
    <br>
    <input type="email" name="email">
    <br>
    Điểm
    <br>
    <input type="text" name="score">
    <br>
    <button>Thêm sinh viên</button>
</form>