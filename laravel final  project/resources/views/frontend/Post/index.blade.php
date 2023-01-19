@extends('layouts.app')

@section('title',"$category->meta_title")

@section('title',"$category->meta_description")

@section('title',"$category->meta_keyword")

@section('content')
<div class="container">
    <div class="category_content">
        <img src="{{asset('uploads/category/'.$category->image)}}" alt="">
        <h2>{{$category->name}}</h2>
        <p>{{$category->description}}</p>
    </div>
</div>

<div class="container category_post">
    <div class="card" style="width: 100%;">
      <div class="card-header">
        Posts related to {{$category->name}}
       </div>
       <ul class="list-group list-group-flush">
    @forelse ($post as $postitem)
    <li class="list-group-item"><a href="{{ url('category/'.$category->slug.'/'.$postitem->slug)}}">
                {{$postitem->name}}</a>
                <div class="created_meta">
                <h6>Posted On: {{ $postitem->created_at->format('d/m/Y H:i:s')}}</h6>
                <h6>Posted by: {{ $postitem->user->name}}</h6>
                </div>
            </li>
            
    @empty
    <li class="list-group-item">
        No posts available
      </li>
    @endforelse
    </ul>
    
  </div>
  
</div>
<div class="your-paginate container">
                {{$post->links()}}
     </div>

@endsection