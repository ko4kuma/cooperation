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
            <form action="{{ route('mandatory-saving.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="">Pilih Nasabah</label>
                    <select name="customer_id" class="form-select">
                        @foreach ($customers as $c)
                            <option value="{{ $c->id }}">{{ $c->code . " - " . $c->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Jumlah</label>
                    <input type="number" name="amount" id="" placeholder="10000" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>

@endsection
