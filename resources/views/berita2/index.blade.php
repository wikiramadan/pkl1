@extends('berita1.index2')

@section('content')
    <div class="container">
        <h1>Daftar berita2</h1>

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
                @foreach ($berita2s as $berita2)
                    <tr>
                        <td>{{ $berita2->id }}</td>
                        <td>{{ $berita2->judulberita }}</td>
                        <td><img src="{{ asset($berita2->gambar) }}" alt="{{ $berita2->judulberita }}" width="100"></td>
                        <td>{{ $berita2->lokasi }}</td>
                        <td>{{ $berita2->deskripsi }}</td>
                        <td>
                            <a href="{{ url('/berita2/update/' . $berita2->id) }}">ubah</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
