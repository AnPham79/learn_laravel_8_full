Form sửa nội dung

<form action="{{ route('process-update', ['id' => $data->id]) }}" method="POST">
    @csrf
    @method('PUT')
    Tên nội dung
    <br>
    <input type="text" name="title" value="{{ $data->title}}">
    <br>
    Nội dung
    <br>
    <input type="text" name="body" value="{{ $data->body}}">
    <br>
    <button>Sửa nội dung</button>
</form>
