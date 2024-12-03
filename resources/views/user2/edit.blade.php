<!-- resources/views/users/edit.blade.php -->
@extends('template')

@section('content')
<div class="container">
    <h2>Edit User</h2>

    <!-- Menampilkan pesan jika ada error atau sukses -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('user2.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')  <!-- Menggunakan metode PUT untuk update -->

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Leave empty if not changing">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" class="form-control">{{ old('alamat', $user->alamat) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
</div>
@endsection
