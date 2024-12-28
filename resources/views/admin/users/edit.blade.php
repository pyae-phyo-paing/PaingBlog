@extends('layouts.admin')
@section('content')

<div class="container-fluid px-4">
    <div class="my-3">
        <h1 class="mt-4 d-inline">Edit User</h1>
        <a href="{{route('backend.users.index')}}" class="btn btn-danger float-end">Cancel</a>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('backend.admin-dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('backend.users.index')}}">Users</a></li>
        <li class="breadcrumb-item active">PaingBlog</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit User Account
        </div>
        <div class="card-body">
            <form action="{{route('backend.users.update',$user->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$user->name}}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{$user->phone}}">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                    <div class="mb-3">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="old_profile-tab" data-bs-toggle="tab" data-bs-target="#old_profile-tab-pane" type="button" role="tab" aria-controls="old_profile-tab-pane" aria-selected="true">Profile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="new_profile-tab" data-bs-toggle="tab" data-bs-target="#new_profile-tab-pane" type="button" role="tab" aria-controls="new_profile-tab-pane" aria-selected="false">New Profile</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="old_profile-tab-pane" role="tabpanel" aria-labelledby="old_profile-tab" tabindex="0">
                            <img src="{{$user->profile}}" alt="" class="w-25 my-3">
                            <input type="hidden" name="old_profile_image" id="" value="{{$user->profile}}">
                        </div>
                        <div class="tab-pane fade" id="new_profile-tab-pane" role="tabpanel" aria-labelledby="new_profile-tab" tabindex="0">
                            <input type="file" class="form-control my-3 @error('profile') is-invalid @enderror" id="profile" name="profile" value="{{old('profile')}}">
                        </div>
                    </div>
                    @error('profile')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$user->email}}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <select class="form-select @error('role') is-invalid @enderror" name="role" value="{{old('role')}}">
                        <option value="User" {{$user->role == 'User' ? 'selected':'';}}>User</option>
                        <option value="Admin" {{$user->role == 'Admin' ? 'selected':'';}}>Admin</option>
                    </select>
                    @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection