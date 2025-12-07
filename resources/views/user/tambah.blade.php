@extends('template')

@section('title')
    User
@endsection

@section('header')
    <h4>Tambah User</h4>
@endsection

@section('main')
    <form action="{{ url('/user') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <label>Foto</label>
        <input type="file" class="@error('foto') is-invalid @enderror" name="foto">
        <br>
        @error('foto')
            <span style="color: red;">{{ $message }}</span>
        @enderror
        <br>

        <label>Nama</label>
        <input type="text" class="@error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}">
        <br>
        @error('nama')
            <span style="color: red;">{{ $message }}</span>
        @enderror
        <br>

        <label>Email</label>
        <input type="text" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
        <br>
        @error('email')
            <span style="color: red;">{{ $message }}</span>
        @enderror
        <br>

        <label>Password</label>
        <input type="text" class="@error('password') is-invalid @enderror" name="password">
        <br>
        @error('password')
            <span style="color: red;">{{ $message }}</span>
        @enderror
        <br>

        <label>Level User</label>
        <select name="level">
            <option value="Superadmin">Superadmin</option>
            <option value="Admin">Admin</option>
        </select>
        <br><br>

        <input type="submit" value="Simpan">
    </form>
@endsection