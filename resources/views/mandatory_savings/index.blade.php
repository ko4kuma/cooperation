@extends('layouts.main')
@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success mb-1">
        <p>{{ $message }}</p>
@endif
    </div>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('mandatory-saving.create') }}" class="btn btn-primary float-end">Pendaftaran</a>
        </div>
    </div>
    
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tanggal Bayar</th>
                    <th>Kode Nasabah</th>
                    <th>Nama Nasabah</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mandatorySavings as $ms)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{ $ms->date }}
                        </td>
                        <td>
                            {{ $ms->customer->code }}
                        </td>
                        <td>
                            {{ $ms->customer->name }}
                        </td>
                        <td>
                            {{ $ms->amount }}
                        </td>
                        </td>
                        <td class="d-flex">
                            <a href="{{ route('mandatory-saving.show', $ms->id) }}" class="btn btn-info btn-sm mx-1">
                            Lihat Data</a>
                            <a href="{{ route('mandatory-saving.edit', $ms->id) }}" class="btn btn-warning btn-sm mx-1">
                            Edit Data</a>
                            <form action="{{ route('mandatory-saving.destroy', $ms->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Hapus Data" class="btn btn-danger btn-sm mx-1" >
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection