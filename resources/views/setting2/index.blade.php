@extends('setting.index')

@section('content')
<div class="container" style="margin-top: 20px;">
    <h1 class="text-center">Setting</h1>
    <table class="table table-bordered table-striped text-center" style="margin: auto; width: 80%;">
    <thead class="table-dark">
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
            <td>{{ $setting->id }}</td>
            <td>{{ $setting->logo }}</td>
            <td>{{ $setting->gambarheader }}</td>
            <td>{{ $setting->gambarprofil1 }}</td>
            <td>{{ $setting->gambarprofil2 }}</td>
            <td>{{ $setting->namaprofil1 }}</td>
            <td>{{ $setting->namaprofil2 }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="text-center">Tidak ada data</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection