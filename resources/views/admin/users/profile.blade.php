@extends('layouts.admin')
@section('content')
<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 400px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
        <div class="card-header text-center">
            <img src="{{$user->profile}}" alt="Profile Picture" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover; border: 3px solid #007bff;">
        </div>
        <div class="card-body text-center">
            <h4 class="card-title mb-2">{{$user->name}}</h4>
            <p class="text-muted">{{$user->role}}</p>
            <hr>
            <div class="text-start">
                <p><strong>Email:</strong> {{$user->email}}</p>
                <p><strong>Phone:</strong> {{$user->phone}}</p>
            </div>
            @if(Auth::check() && Auth::user()->role == 'Admin')
            <a href="{{route('backend.users.edit',$user->id)}}" class="btn btn-primary w-100 mt-3">Edit Profile</a>
            @else
            <p>If you want to edit your profile, you can contact to admin@gmail.com.</p>
            @endif
        </div>
    </div>
</div>

@endsection