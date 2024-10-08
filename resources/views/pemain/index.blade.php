@extends('layouts.app')

@section('title', 'Data Pemain')

@section('content')
    <h1>Data Pemain</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Pemain</th>
            <th>No Punggung</th>
            <th>Posisi</th>
        </tr>
        @foreach ($pemain as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->nama_pemain }}</td>
            <td>{{ $p->no_punggung }}</td>
            <td>{{ $p->posisi }}</td>
        </tr>
        @endforeach
    </table>
@endsection