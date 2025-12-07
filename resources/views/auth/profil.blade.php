@extends('template')

@section('title')
    Profil User
@endsection

@section('header')
    <h4>Profil User</h4>
@endsection

@section('main')
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" onclick="return confirm('Yakin ingin logout?')">Logout</button>
    </form>
    <br>

    <table border="1" width="100%">
        <tbody>
            <tr>
                <td colspan="2"><strong>Data User</strong></td>
            </tr>
            <tr>
                <td width="20%"><strong>Foto User</strong></td>
                <td width="80%">
                    @if($user->foto)
                        <img src="{{ asset('foto/'.$user->foto) }}" width="150" alt="Foto Profil">
                    @else
                        Tidak ada foto
                    @endif
                </td>
            </tr>
            <tr>
                <td><strong>Nama</strong></td>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <td><strong>Level</strong></td>
                <td>{{ $user->level }}</td>
            </tr>
        </tbody>
    </table>
@endsection