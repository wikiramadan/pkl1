@extends('template')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Pengguna</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <!-- Input fields -->
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan alamat lengkap">{{ $user->alamat ?? '' }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
