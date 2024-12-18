{{--


@extends('setting.index')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Pengaturan</h3>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('setting.updateAll') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead text-center">
                        <tr>
                            <th>ID</th>
                            <th>Logo</th>
                            <th>Gambar Header</th>
                            <th>Gambar Profil 1</th>
                            <th>Gambar Profil 2</th>
                            <th>Nama Profil 1</th>
                            <th>Nama Profil 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($settings as $setting)
                            <tr>
                                <td>
                                    {{ $setting->id }}
                                    <input type="hidden" name="ids[]" value="{{ $setting->id }}">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="logo[{{ $setting->id }}]"
                                           value="{{ $setting->logo }}" placeholder="URL Logo">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="gambarheader[{{ $setting->id }}]"
                                           value="{{ $setting->gambarheader }}" placeholder="URL Gambar Header">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="gambarprofil1[{{ $setting->id }}]"
                                           value="{{ $setting->gambarprofil1 }}" placeholder="URL Gambar Profil 1">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="gambarprofil2[{{ $setting->id }}]"
                                           value="{{ $setting->gambarprofil2 }}" placeholder="URL Gambar Profil 2">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="namaprofil1[{{ $setting->id }}]"
                                           value="{{ $setting->namaprofil1 }}" placeholder="Masukkan Nama Profil 1">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="namaprofil2[{{ $setting->id }}]"
                                           value="{{ $setting->namaprofil2 }}" placeholder="Masukkan Nama Profil 2">
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="form-group text-center mt-3">
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
     <!-- Pesan Sukses -->
     @if (session('success'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{ session('success') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
 @endif 
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Setting</h3>
        </div>
         <div class="card-body">
            <form action="{{ route('setting.update') }}" method="POST">
                @csrf
                @method('PUT')

                @foreach($settings as $setting)
                <div class="form-group">
                    <label for="id_{{ $setting->id }}">ID</label>
                    <input type="text" class="form-control" id="id_{{ $setting->id }}" name="id[{{ $setting->id }}]" value="{{ $setting->id }}" readonly>
                </div>
                    <div class="form-group">
                        <label for="logo_{{ $setting->id }}">Logo</label>
                        <input type="text" class="form-control" id="logo_{{ $setting->id }}" name="logo[{{ $setting->id }}]" value="{{ $setting->logo }}">
                    </div>

                    <div class="form-group">
                        <label for="gambarheader_{{ $setting->id }}">Gambar Header</label>
                        <input type="text" class="form-control" id="gambarheader_{{ $setting->id }}" name="gambarheader[{{ $setting->id }}]" value="{{ $setting->gambarheader }}">
                    </div>

                    <div class="form-group">
                        <label for="gambarprofil1_{{ $setting->id }}">Gambar Profil 1</label>
                        <input type="text" class="form-control" id="gambarprofil1_{{ $setting->id }}" name="gambarprofil1[{{ $setting->id }}]" value="{{ $setting->gambarprofil1 }}">
                    </div>

                    <div class="form-group">
                        <label for="gambarprofil2_{{ $setting->id }}">Gambar Profil 2</label>
                        <input type="text" class="form-control" id="gambarprofil2_{{ $setting->id }}" name="gambarprofil2[{{ $setting->id }}]" value="{{ $setting->gambarprofil2 }}">
                    </div>

                    <div class="form-group">
                        <label for="namaprofil1_{{ $setting->id }}">Nama Profil 1</label>
                        <input type="text" class="form-control" id="namaprofil1_{{ $setting->id }}" name="namaprofil1[{{ $setting->id }}]" value="{{ $setting->namaprofil1 }}">
                    </div>

                    <div class="form-group">
                        <label for="namaprofil2_{{ $setting->id }}">Nama Profil 2</label>
                        <input type="text" class="form-control" id="namaprofil2_{{ $setting->id }}" name="namaprofil2[{{ $setting->id }}]" value="{{ $setting->namaprofil2 }}">
                    </div>

                    <hr>
                @endforeach

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
