@extends('template')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Kabar</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('kabar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Input fields -->
                <div class="form-group">
                    <label for="judulberita">Judul Berita</label>
                    <input type="text" name="judulberita" id="judulberita" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <input type="text" name="lokasi" id="lokasi" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan deskripsi lengkap" required></textarea>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
