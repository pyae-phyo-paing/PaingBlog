@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <div class="my-3">
        <h1 class="mt-4 d-inline">Categories</h1>
        <a href="{{route('backend.categories.create')}}" class="btn btn-primary float-end">Create</a>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('backend.categories.index')}}">Categories</a></li>
        <li class="breadcrumb-item active">PaingBlog</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Category List
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php 
                        $j = 1;
                    @endphp

                    @foreach($categories as $category)
                        <tr>
                            <td>{{$j++}}</td>
                            <td>{{$category->name}}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                <a href="" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$categories->links()}}
        </div>
    </div>
</div>
@endsection