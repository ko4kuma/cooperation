<h1>Selamat datang!</h1>

<h5>Nama saya adalah {{ $name }}</h5>

@if ($grade >= 60)
@else
    <h3>Tidak Lulus</h3>
@endif

@for ($i = 1; $i <= 10; $i++)
    {{ $i }}
@endfor
