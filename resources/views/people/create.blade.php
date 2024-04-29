@extends('layouts.main')
@section('content')
    <h1>Form Pendaftaran</h1>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </div>
    @endif


    <form action="{{ route('person.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" name="name" placeholder="Input nama anda">
        </div>
        <div class="mb-3">
            <input type="submit" value="Simpan" class="btn btn-success">
        </div>
    </form>
@endsection
