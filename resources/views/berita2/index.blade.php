@extends('berita.index2')

@section('content')
    <div class="container mt-4" style="width: 95%;">
        <h1 class="mb-4">Berita</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" style="width: 100%;">
                <thead class="thead-dark text-center">
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
@endsection
