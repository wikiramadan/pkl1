@extends('template')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Kabar</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('kabar.update', $kabar->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="judulberita">Judul</label>
                        <input type="text" name="judulberita" id="judulberita" class="form-control"
                               value="{{ $kabar->judulberita }}" required>
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control">
                        @if ($kabar->gambar)
                            <img src="{{ asset('storage/' . $kabar->gambar) }}" alt="Gambar" class="img-thumbnail mt-2"
                                 style="width: 150px; height: auto;">
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" name="lokasi" id="lokasi" class="form-control"
                               value="{{ $kabar->lokasi }}" required>
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required>{{ $kabar->deskripsi }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('kabar.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
@endsection
