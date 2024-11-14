@extends('indek')

@section('content')
    <div class="container">
        <h1>Tambah Berita</h1>

        <form action="{{ route('berita2.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="judulberita">Judul Berita</label>
                <input type="text" name="judulberita" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" class="form-control">
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" name="lokasi" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
