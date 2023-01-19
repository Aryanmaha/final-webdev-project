@extends('layouts.master')

@section('title','Category')

@section('content')


<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Edit category</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
               <div class="alert alert-danger">
                  @foreach($errors->all() as $error)
                      <div>{{$error}}</div>
                   @endforeach
                </div>
            @endif
            <form action="{{ url('admin/update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf 
                @method('PUT')
                <div class="mb-3">
                    <label for="">Category Name</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" value="{{ $category->slug }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">description</label>
                    <textarea name="description" class="form-control" rows="5" id="mySummernote">{{ $category->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <h6> SEO Tags </h6>
                <div class="mb-3">
                    <label for="">Meta title</label>
                    <input type="text" name="meta_title" class="form-control" value="{{ $category->meta_title }}">
                </div>
                <div class="mb-3">
                    <label for="">Meta description</label>
                    <textarea name="meta_description" class="form-control" rows="3" ">{{ $category->meta_description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">meta Keywords</label>
                    <textarea name="meta_keyword" class="form-control" rows="3" >{{ $category->meta_keyword }}</textarea>
                </div>

                <h6>Status mode </h6>
                <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="">NavBar Status</label>
                    <input type="checkbox" name="navbar_status" value="{{ $category->navbar_status == '1' ? 'checked':''  }}">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" name="status" value="{{ $category->status == '1' ? 'checked':''}}">
                </div>
                <div class="col-md-8 ">
                    <button type="submit" class="btn  btn-primary"> Update Category</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection