@extends('layouts.main')
@section('content')
<div class="container">
    <table class="table">
        <tr>
            <th>Kode Pelanggan</th>
            <td>: {{ $customer->code }}</td>
        </tr>
        <tr>
            <th>Nama Pelanggan</th>
            <td>: {{ $customer->name }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>: {{ $customer->address }}</td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td>: {{ $customer->phone }}</td>
        </tr>
    </table>
</div>
    
@endsection