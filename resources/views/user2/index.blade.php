@extends('user.index')

@section('content')
<div class="container mt-4">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Daftar Pengguna</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Password</th>
              <th>Alamat</th>

            </tr>
          </thead>
          @foreach ($users as $user )
          <tr>
              <td>{{ $user->id}}</td>
              <td>{{ $user->name}}</td>
              <td>{{ $user->email}}</td>
              <td>{{ $user->password}}</td>
              <td>{{ $user->alamat}}</td>
              <td>
                 
              </td>
          </tr>
              
          @endforeach
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
   
@endsection