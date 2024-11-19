@extends('berita.index2')

@section('content')
    <div class="container" style="margin-top: 20px;">
        <h1 class="text-center">Daftar Berita</h1>
        <table class="table table-bordered table-striped text-center" style="margin: auto; width: 80%;">
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
                @foreach ($beritas as $berita2)
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
