@extends('template')

@section('title')
    Login
@endsection

@section('header')
    <h4>Login</h4>
@endsection

@section('main')
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf
        
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        <br><br>

        <label>Password</label>
        <input type="password" name="password" required>
        <br><br>

        <button type="submit">Login</button>
    </form>
@endsection