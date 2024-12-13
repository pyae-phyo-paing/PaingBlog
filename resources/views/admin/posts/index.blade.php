@extends('layouts.admin')
@section('content')             
<div class="container-fluid px-4">
    <div class="my-3">
        <h1 class="mt-4 d-inline">Posts</h1>
        <a href="{{route('backend.posts.create')}}" class="btn btn-primary float-end">Create Post</a>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('backend.posts.index')}}">Posts</a></li>
        <li class="breadcrumb-item active">PaingBlog</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Post List
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                        $j = 1;
                    @endphp
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$j++}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->category_id}}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                <a href="" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection