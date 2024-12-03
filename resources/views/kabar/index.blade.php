@extends('template')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Kabar</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('kabar.create') }}" class="btn btn-sm btn-secondary">Tambah Kabar</a>
                <table class="table table-bordered table-striped table-hover" style="margin-top: 15px">
                    <thead class="thead text-center">
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Lokasi</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kabars as $kabar)
                            <tr>
                                <td>{{ $kabar->id }}</td>
                                <td>{{ $kabar->judulberita }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $kabar->gambar) }}" alt="Gambar" style="width: 100px; height: auto;">
                                </td>
                                <td>{{ $kabar->lokasi }}</td>
                                <td>{{ $kabar->deskripsi }}</td>
                                <td class="text-center">
                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('kabar.destroy', $kabar->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
