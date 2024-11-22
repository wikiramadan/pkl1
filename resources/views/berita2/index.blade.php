@extends('berita.index2')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Berita</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('berita2.create') }}" class="btn btn-sm btn-secondary">Tambah Berita</a>
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead text-center">
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Lokasi</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($beritas as $berita2)
                            <tr>
                                <td>{{ $berita2->id }}</td>
                                <td>{{ $berita2->judulberita }}</td>
                                <td>{{ $berita2->gambar }}</td>
                                <td>{{ $berita2->lokasi }}</td>
                                <td>{{ $berita2->deskripsi }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
