<h1>Hello đitk mẹ LGBT</h1>

@php    
    $name = 'Con Chó Thảo';

    $fruits = array('botmi', 'duong', 'trung','sua', 'botno', 'nucuoicuaem');
@endphp

<br>

<h2>{{ $name }}</h2>

<b></b>

@foreach ($fruits as $item)
    {{ $item }} <br>
@endforeach

<br>

@for ($i = 1; $i <= 10; $i++)
    {{ $i }} <br>
@endfor