<div>
    <h1>Hello word</h1>
    <h2>hello {{ $name }}</h2>
    <ul>Danh sách trái cây
        @foreach($fruits as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>