@extends('template')

@section('title')
    User
@endsection

@section('header')
    <h4>User</h4>
@endsection

@section('main')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form method="get" action="{{ url('/user.cari') }}">
        @csrf
        <input type="text" name="katakunci" value="{{ $cari }}" placeholder="Cari user...">
        <input type="submit" value="Cari">
    </form>
    <br>

    @if($JumlahDataUser > 0)
        <div class="alert alert-info">
            Ditemukan <strong>{{ $JumlahDataUser }}</strong> data dengan kata kunci: <strong>{{ $cari }}</strong>
        </div>

        <table border='1' width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Aksi Edit</th>
                    <th>Aksi Detail</th>
                    <th>Aksi Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach($DataUser as $key => $User)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $User->name }}</td>
                        <td>{{ $User->email }}</td>
                        <td>{{ $User->level }}</td>

                        <td>
                            <a href="{{ url('/user.'.$User->id.'.edit') }}">
                                <input type="button" value="Edit" />
                            </a>
                        </td>

                        <td>
                            <a href="{{ url('/user.'.$User->id.'.detail') }}">
                                <input type="button" value="Detail" />
                            </a>
                        </td>

                        <td>
                            <form action="{{ url('/user.'.$User->id) }}" method="Post" onsubmit="return confirm('Apakah data ingin dihapus?')">
                                @csrf
                                <input type="hidden" value="DELETE" name="_method">
                                <input type="submit" value="Delete" />
                            </form>
                        </td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                @endforeach
            </tbody>
        </table>

        <br>
        {{ $DataUser->appends(['katakunci' => $cari])->links() }}

    @else
        <div class="alert alert-warning">
            Data dengan kata kunci: <strong>{{ $cari }}</strong> tidak ditemukan.
            <br>
            <a href="{{ url('/user') }}">Klik Disini Untuk Kembali</a>
        </div>
    @endif
{{ $DataUser->links() }}
<a href="{{url('/user.create')}}">Tambah User</a>
@endsection