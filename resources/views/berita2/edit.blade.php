@extends('berita.index2')

@section('content')
    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Pengaturan</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('setting.update', $setting->id ?? 0) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Logo -->
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . ($setting->logo ?? 'default-logo.jpg')) }}" alt="Logo" width="100">
                        </div>
                        <input type="file" class="form-control" id="logo" name="logo">
                    </div>

                    <!-- Gambar Header -->
                    <div class="mb-3">
                        <label for="gambarheader" class="form-label">Gambar Header</label>
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . ($setting->gambarheader ?? 'default-header.jpg')) }}" alt="Gambar Header" width="100">
                        </div>
                        <input type="file" class="form-control" id="gambarheader" name="gambarheader">
                    </div>

                    <!-- Gambar Profil 1 -->
                    <div class="mb-3">
                        <label for="gambarprofil1" class="form-label">Gambar Profil 1</label>
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . ($setting->gambarprofil1 ?? 'default-profile1.jpg')) }}" alt="Gambar Profil 1" width="100">
                        </div>
                        <input type="file" class="form-control" id="gambarprofil1" name="gambarprofil1">
                    </div>

                    <!-- Gambar Profil 2 -->
                    <div class="mb-3">
                        <label for="gambarprofil2" class="form-label">Gambar Profil 2</label>
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . ($setting->gambarprofil2 ?? 'default-profile2.jpg')) }}" alt="Gambar Profil 2" width="100">
                        </div>
                        <input type="file" class="form-control" id="gambarprofil2" name="gambarprofil2">
                    </div>

                    <!-- Nama Profil 1 -->
                    <div class="mb-3">
                        <label for="namaprofil1" class="form-label">Nama Profil 1</label>
                        <input type="text" class="form-control" id="namaprofil1" name="namaprofil1"
                               value="{{ $setting->namaprofil1 ?? '' }}" placeholder="Masukkan Nama Profil 1">
                    </div>

                    <!-- Nama Profil 2 -->
                    <div class="mb-3">
                        <label for="namaprofil2" class="form-label">Nama Profil 2</label>
                        <input type="text" class="form-control" id="namaprofil2" name="namaprofil2"
                               value="{{ $setting->namaprofil2 ?? '' }}" placeholder="Masukkan Nama Profil 2">
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
