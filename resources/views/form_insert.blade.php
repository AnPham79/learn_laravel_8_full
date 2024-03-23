Form thêm nội dung

<form action="{{ route('process-insert') }}" method="POST">
    @csrf
    Tên nội dung
    <br>
    <input type="text" name="title">
    <br>
    Nội dung
    <br>
    <input type="text" name="body">
    <br>
    <button>Thêm nội dung</button>
</form>