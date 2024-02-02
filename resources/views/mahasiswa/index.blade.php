@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Mahasiswa') }}
                    <a href="{{ route('mahasiswa.create') }}" class="btn btn-sm btn-primary float-right">Tambah Mahasiswa</a>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tanggal Lahir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mahasiswas as $mahasiswa)
                            <tr>
                                <td width="1%">{{ $mahasiswa->id }}</td>
                                <td>{{ $mahasiswa->nama }}</td>
                                <td>{{ $mahasiswa->alamat }}</td>
                                <td>{{ $mahasiswa->tanggal_lahir }}</td>
                                <td width="1%">
                                    <div class="d-flex">
                                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}">
                                            <button type="button" class="btn btn-xs btn-info mr-1">Edit</button>
                                        </a>
                                        @can('isAdmin')
                                        <!-- Tampilkan elemen ini hanya jika pengguna memiliki izin admin -->
                                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                                        </form>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
