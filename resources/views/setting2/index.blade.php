@extends('setting.index')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Setting</h3>
            </div>
            <div class="card-body">
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
                                <td>{{ $setting->id }}</td>
                                <td>{{ $setting->logo }}</td>
                                <td>{{ $setting->gambarheader }}</td>
                                <td>{{ $setting->gambarprofil1 }}</td>
                                <td>{{ $setting->gambarprofil2 }}</td>
                                <td>{{ $setting->namaprofil1 }}</td>
                                <td>{{ $setting->namaprofil2 }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
