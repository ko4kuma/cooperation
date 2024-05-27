@extends('layouts.main')

@section('content')
    @if (count($errors)>0) 
    <div class="alert alert-danger">
        <p>ERROR!!!</p>
        @foreach ($errors->all() as $item)
            <li> {{ $item }}</li>
        @endforeach
    </div>
    @endif

    <div class="card">
        <div class="card-header">
            Form Pendaftaran
        </div>
        <div class="card-body">
            <form action="{{ route('customer.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <input type="text" name="code" id="" placeholder="Kode Pelanggan" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="name" id="" placeholder="Nama Pelanggan" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="phone" id="" placeholder="08xxxxx" class="form-control">
                </div>
                <div class="mb-3">
                    <textarea name="address" id="" cols="30" rows="3" placeholder="Alamat Pelanggan" class="form-control">
                    </textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>

@endsection
