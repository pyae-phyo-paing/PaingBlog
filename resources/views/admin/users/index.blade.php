@extends('layouts.admin')
@section('content')             
<div class="container-fluid px-4">
    <div class="my-3">
        <h1 class="mt-4 d-inline">Users</h1>
        <a href="{{route('backend.posts.create')}}" class="btn btn-primary float-end">Create User</a>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('backend.users.index')}}">Users</a></li>
        <li class="breadcrumb-item active">PaingBlog</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            User List
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php 
                        $j = 1;
                    @endphp

                    @foreach($users as $user)
                        <tr>
                            <td>{{$j++}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$users->links()}}
        </div>
    </div>
</div>



@endsection
