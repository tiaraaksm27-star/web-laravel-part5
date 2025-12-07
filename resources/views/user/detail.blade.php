@extends('template')

@section('title')
    Detail User
@endsection

@section('header')
    <h4>Detail User</h4>
@endsection

@section('main')
    <a href="{{ url('/user') }}">Kembali</a>
    <br><br>

    <table border="1" width="100%">
        <tbody>
            <tr>
                <td colspan="2"><strong>Data User</strong></td>
            </tr>
            <tr>
                <td width="20%"><strong>Foto User</strong></td>
                <td width="80%">
                    <img src="{{ asset('foto/'.$DataUser->foto) }}" width="150" alt="Foto User">
                </td>
            </tr>
            <tr>
                <td><strong>Nama</strong></td>
                <td>{{ $DataUser->name }}</td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td>{{ $DataUser->email }}</td>
            </tr>
            <tr>
                <td><strong>Level</strong></td>
                <td>{{ $DataUser->level }}</td>
            </tr>
        </tbody>
    </table>
@endsection