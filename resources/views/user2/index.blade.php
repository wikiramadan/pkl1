@extends('user.index')

@section('content')
        <h2 class="mb-4">User Table</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>password</th>
                    <th>alamat</th>
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
                    <a href="{{url('/user/update/'. $user->id)}}">ubah</a>
                </td>
            </tr>
                
            @endforeach
        </table>

   
@endsection