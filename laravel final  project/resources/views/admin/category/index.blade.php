@extends('layouts.master')

@section('title','Category')

@section('content')


<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>View Category 
                <a href="{{url('admin/add-category')}}" class="btn btn-primary btn-sm float-end"> Add category</a>
            </h4>
        </div>
        <div class="card-body">
        @if (session('message'))
          <div class = "alert alert-success">{{ session('message') }}</div>
        @endif

        <table id="mydataTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>ID </th>
                    <TH>Category Name</TH>
                    <th>Category Description</th>
                    <th>image</th>
                    <th>status</th> 
                    <th>Edit/delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <img src="{{ asset('uploads/category/'.$item->image) }}" width="100x" height="100px" alt="">
                    </td>
                    <td>{{ $item->status == "1" ? 'hidden':'shown' }}</td>
                    <td>
                        <a href="{{ url('admin/edit-category/'.$item->id) }}" class="btn btn-success">edit</a>
                    
                        <a href="{{ url('admin/delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
 </div>

</div>
@endsection