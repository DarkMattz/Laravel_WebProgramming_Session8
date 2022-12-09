@extends('.__template.global')

@section('main-content')
    <main class="container mt-3">
        <div class="d-flex justify-content-between align-items-center my-5">
            <h1>Table Mahasiswa</h1>
            <a href="{{route('input')}}" class="btn btn-primary">+ Tambah Mahasiswa</a>
        </div>
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswas as $mahasiswa)
                    <tr>
                        <td>{{$mahasiswa->id}}</td>
                        <td>{{$mahasiswa->nim}}</td>
                        <td>{{$mahasiswa->nama}}</td>
                        <td>{{$mahasiswa->jenis_kelamin}}</td>
                        <td>{{$mahasiswa->jurusan}}</td>
                        <td>{{$mahasiswa->alamat}}</td>
                        <td class="d-flex">
                            <a href="{{route('edit', $mahasiswa->id)}}" class="btn btn-warning me-3">Edit</a>
                            <form action="{{route('delete', $mahasiswa->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
