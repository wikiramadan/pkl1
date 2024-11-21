@extends('setting.index')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('setting.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="logo" class="form-label">logo</label>
                        <input type="text" name="logo" class="form-control" id="logo"
                            value="{{ $setting->logo ?? '' }}" placeholder="Masukkan kata ganti (opsional)">
                    </div>

                    <!-- gambarheader -->
                    <div class="mb-3">
                        <label for="gambarheader" class="form-label">gambarheader</label>
                        <textarea name="gambarheader" class="form-control" id="gambarheader" rows="3" placeholder="Masukkan gambarheader">{{ $setting->gambarheader ?? '' }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="gambarprofil1" class="form-label">gambarprofil1</label>
                        <textarea name="gambarprofil1" class="form-control" id="gambarprofil1" rows="3"
                            placeholder="Masukkan gambarprofil1">{{ $setting->gambarprofil1 ?? '' }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="gambarprofil2" class="form-label">gambarprofil2</label>
                        <textarea name="gambarprofil2" class="form-control" id="gambarprofil2" rows="3"
                            placeholder="Masukkan gambarprofil2">{{ $setting->gambarprofil2 ?? '' }}</textarea>
                    </div>

                    <!-- Nama -->
                    <div class="mb-3">
                        <label for="namaprofil1" class="form-label">Nama</label>
                        <input type="text" name="namaprofil1" class="form-control" id="namaprofil1"
                            value="{{ $setting->namaprofil1 }}" placeholder="Masukkan nama">
                    </div>

                    <!-- Username -->
                    <div class="mb-3">
                        <label for="namaprofil2" class="form-label">Nama Pengguna</label>
                        <input type="text" name="namaprofil2" class="form-control" id="namaprofil2"
                            value="{{ $setting->namaprofil2 }}" placeholder="Masukkan nama pengguna">
                    </div>






                    {{-- <!-- Tambahkan Banner -->
                <div class="mb-3">
                    <label for="banner" class="form-label">Tambahkan Banner</label>
                    <input type="file" name="banner" class="form-control" id="banner">
                    @if ($setting->banner)
                        <img src="{{ asset('storage/' . $setting->banner) }}" alt="Banner" class="mt-2 img-fluid">
                    @endif
                </div> --}}


                    <!-- Submit -->
                    <button type="submit" class="btn btn-primary">Simpan Pengaturan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
