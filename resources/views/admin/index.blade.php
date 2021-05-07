@extends('layouts.master')

@section('content')
            @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>
            @endif
            <div class="row">
                <div class="col-10">
                    <h3>DAFTAR ADMIN</h1>
                </div>
                <table class="table table-hover"> 
                <tr>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Password</th>
                </tr>
                @foreach($data_admin as $admin)
                <tr>
                    <td>{{$admin->username}}</td>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->password}}</td>
                </tr>
                 @endforeach
                </table>
            </div>
        </div>
@endsection