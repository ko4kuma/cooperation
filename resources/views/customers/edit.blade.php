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
            Ubah Data Nasabah Kode #{{ $customer->code }}
        </div>
        <div class="card-body">
            <form action="{{ route('customer.update') }}" method="post"> 
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <input type="hidden" name="id" id="" placeholder="Kode Pelanggan" value="{{ $customer->id }}"  class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="name" id="" placeholder="Nama Pelanggan" value="{{ $customer->name }}" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="phone" id="" placeholder="08xxxxx" value="{{ $customer->phone }}" class="form-control">
                </div>
                <div class="mb-3">
                    <textarea name="address" id="" cols="30" rows="3" placeholder="Alamat Pelanggan" class="form-control">
                        {{ $customer->address }}</textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Ubah" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>

@endsection
