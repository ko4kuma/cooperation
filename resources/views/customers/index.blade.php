@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('customer.create') }}" class="btn btn-primary float-end">Pendaftaran</a>
        </div>
    </div>
    
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{ $customer->code }}
                        </td>
                        <td>
                            {{ $customer->name }}
                        </td>
                        <td>
                            {{ $customer->phone }}
                        </td>
                        <td>
                            <a href="{{ route('customer.show', $customer->id) }}" class="btn btn-info btn-sm">
                            Lihat Data</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection