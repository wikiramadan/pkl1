@extends('template')

@section('content')
    <div class="container mt-4">

        @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Berita</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('kabar.create') }}" class="btn btn-sm btn-secondary">Tambah Berita</a>
                <table class="table table-bordered table-striped table-hover" style="margin-top: 15px">
                    <thead class="thead text-center">
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Lokasi</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kabars as $kabar)
                            <tr>
                                <td>{{ $kabar->id }}</td>
                                <td>{{ $kabar->judulberita }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $kabar->gambar) }}" alt="Gambar"
                                        style="width: 100px; height: auto;">
                                </td>

                                <td>{{ $kabar->lokasi }}</td>
                                <td>{{ $kabar->deskripsi }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('kabar.edit', $kabar->id) }}"
                                            class="btn btn-sm btn-primary me-2">Edit</a>

                                        <form action="{{ route('kabar.destroy', $kabar->id) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
