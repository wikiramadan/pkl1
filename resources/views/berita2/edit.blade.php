@extends('include.navbar')

@section('content')
    <div class="container">
        <h1>Edit Berita</h1>

        <form action="{{ route('berita2.update', $berita2->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judulberita">Judul Berita</label>
                <input type="text" name="judulberita" class="form-control" value="{{ $berita2->judulberita }}" required>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" class="form-control" value="{{ $berita2->gambar }}">
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" name="lokasi" class="form-control" value="{{ $berita2->lokasi }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control">{{ $berita2->deskripsi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
