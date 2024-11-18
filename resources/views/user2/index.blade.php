@extends('user.index')

@section('content')
<h1 class="user-table-title">User Table</h1>
        <table class="table table-bordered table-striped" style="margin-top: 20px">
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
                   
                </td>
            </tr>
                
            @endforeach
        </table>

   
@endsection