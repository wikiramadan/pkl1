@extends('indek')

@section('content')
    <div class="container">
        <h1>Daftar berita2</h1>

        <a href="{{ route('berita2.create') }}" class="btn btn-primary">Tambah berita2</a>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered mt-3">
            <thead>
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
                @foreach($berita2s as $berita2)
                    <tr>
                        <td>{{ $berita2->id }}</td>
                        <td>{{ $berita2->judulberita }}</td>
                        <td><img src="{{ asset($berita2->gambar) }}" alt="{{ $berita2->judulberita }}" width="100"></td>
                        <td>{{ $berita2->lokasi }}</td>
                        <td>{{ $berita2->deskripsi }}</td>
                        <td>
                            <a href="{{ route('berita2.edit', $berita2->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('berita2.destroy', $berita2->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus berita2 ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
