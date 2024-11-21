{{-- @extends('setting.index')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Setting</h3>
        </div>
        <div class="card-body">
            <!-- satu setting yang diedit-->
            <form action="{{ route('setting.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" class="form-control" id="logo" name="logo">
                    @if($setting->logo)
                        <small class="form-text text-muted">Logo Saat Ini: {{ $setting->logo }}</small>
                    @endif
                </div>

                <div class="form-group">
                    <label for="gambarheader">Gambar Header</label>
                    <input type="file" class="form-control" id="gambarheader" name="gambarheader">
                    @if($setting->gambarheader)
                        <small class="form-text text-muted">Gambar Header Saat Ini: {{ $setting->gambarheader }}</small>
                    @endif
                </div>

                <div class="form-group">
                    <label for="gambarprofil1">Gambar Profil 1</label>
                    <input type="file" class="form-control" id="gambarprofil1" name="gambarprofil1">
                    @if($setting->gambarprofil1)
                        <small class="form-text text-muted">Gambar Profil 1 Saat Ini: {{ $setting->gambarprofil1 }}</small>
                    @endif
                </div>

                <div class="form-group">
                    <label for="gambarprofil2">Gambar Profil 2</label>
                    <input type="file" class="form-control" id="gambarprofil2" name="gambarprofil2">
                    @if($setting->gambarprofil2)
                        <small class="form-text text-muted">Gambar Profil 2 Saat Ini: {{ $setting->gambarprofil2 }}</small>
                    @endif
                </div>

                <div class="form-group">
                    <label for="namaprofil1">Nama Profil 1</label>
                    <input type="text" class="form-control" id="namaprofil1" name="namaprofil1" value="{{ $setting->namaprofil1 }}" placeholder="Masukkan Nama Profil 1">
                </div>

                <div class="form-group">
                    <label for="namaprofil2">Nama Profil 2</label>
                    <input type="text" class="form-control" id="namaprofil2" name="namaprofil2" value="{{ $setting->namaprofil2 }}" placeholder="Masukkan Nama Profil 2">
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection



 --}}

 @extends('setting.index')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Profil</h3>
        </div>
        <div class="card-body">
            <!-- Pesan sukses jika ada -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Formulir Edit Profil -->
            <form action="{{ route('setting.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                 <!-- Gambar Header -->
                 <div class="form-group text-center">
                    <label for="logo">Gambar Header</label><br>
                    <img src="{{ $setting->logo ? asset('storage/'.$setting->logo) : 'https://via.placeholder.com/600x200' }}" alt="logo" class="img-fluid mb-2" style="width: 100%; height: 200px; object-fit: cover;">
                    <input type="file" class="form-control" id="logo" name="logo">
                </div>

                 <div class="form-group text-center">
                    <label for="gambarheader">Gambar Header</label><br>
                    <img src="{{ $setting->gambarheader ? asset('storage/'.$setting->gambarheader) : 'https://via.placeholder.com/600x200' }}" alt="Gambar Header" class="img-fluid mb-2" style="width: 100%; height: 200px; object-fit: cover;">
                    <input type="file" class="form-control" id="gambarheader" name="gambarheader">
                </div>

                <!-- Foto Profil 1 -->
                <div class="form-group text-center">
                    <label for="gambarprofil1">Foto Profil 1</label><br>
                    <img src="{{ $setting->gambarprofil1 ? asset('storage/'.$setting->gambarprofil1) : 'https://via.placeholder.com/150' }}" alt="Foto Profil" class="img-fluid mb-2" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover;">
                    <input type="file" class="form-control" id="gambarprofil1" name="gambarprofil1">
                </div>

                <!-- Foto Profil 2 -->
                <div class="form-group text-center">
                    <label for="gambarprofil2">Foto Profil 2</label><br>
                    <img src="{{ $setting->gambarprofil2 ? asset('storage/'.$setting->gambarprofil2) : 'https://via.placeholder.com/150' }}" alt="Foto Profil" class="img-fluid mb-2" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover;">
                    <input type="file" class="form-control" id="gambarprofil2" name="gambarprofil2">
                </div>

                <!-- Nama Profil 1 -->
                <div class="form-group">
                    <label for="namaprofil1">Nama Profil 1</label>
                    <input type="text" class="form-control" id="namaprofil1" name="namaprofil1" value="{{ old('namaprofil1', $setting->namaprofil1) }}" placeholder="Masukkan Nama Profil 1">
                </div>

                <!-- Nama Profil 2 -->
                <div class="form-group">
                    <label for="namaprofil2">Nama Profil 2</label>
                    <input type="text" class="form-control" id="namaprofil2" name="namaprofil2" value="{{ old('namaprofil2', $setting->namaprofil2) }}" placeholder="Masukkan Nama Profil 2">
                </div>

                <!-- Button Submit -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
