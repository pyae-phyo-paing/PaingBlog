@extends('layouts.admin')
@section('content')

<div class="container-fluid px-4">
    <div class="my-3">
        <h1 class="mt-4 d-inline">Create Category</h1>
        <a href="{{route('backend.categories.index')}}" class="btn btn-danger float-end">Cancel</a>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('backend.admin-dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('backend.categories.index')}}">Categories</a></li>
        <li class="breadcrumb-item active">PaingBlog</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Category
        </div>
        <div class="card-body">
            <form action="{{route('backend.categories.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$category->name}}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary w-100">save</button>
            </form>
        </div>
    </div>
</div>

@endsection