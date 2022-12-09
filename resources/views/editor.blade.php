@extends('__template.global')

@section('main-content')
    <main class="container">
        @if(empty($mahasiswa))
            <form action="{{route('input-saved')}}" method="post">
                @csrf
                @method('PUT')
                <label for="nim">NIM</label>
                <input type="text" name="nim">
                <label for="nama">Nama</label>
                <input type="text" name="nama">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin">
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat">
                <button type="submit">Simpan</button>
            </form>
        @else
            <form action="{{route('update-edited', $mahasiswa->id)}}" method="post">
                @csrf
                @method('PATCH')
                <label for="nim">NIM</label>
                <input type="text" name="nim" value="{{$mahasiswa->nim}}">
                <label for="nama">Nama</label>
                <input type="text" name="nama" value="{{$mahasiswa->nama}}">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" value="{{$mahasiswa->jenis_kelamin}}">
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" value="{{$mahasiswa->jurusan}}">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" value="{{$mahasiswa->alamat}}">
                <button type="submit">Simpan</button>
            </form>
        @endif
    </main>
@endsection
