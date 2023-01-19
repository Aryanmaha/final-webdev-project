@extends('layouts.app')
@section('title',"categories")

@section('title',"categories")

@section('title',"categories")

@section('content')
@php
$categories =  App\Models\Category::where('navbar_status','0')->where('status','0')->get();
@endphp
<main class="container category_main">
<h1>Categories</h1>
<div class="category_grid">
@foreach($categories as $cateitem)
<div class="category">
         <a href="{{url('category/'.$cateitem->slug)}}">
              <img src="{{ asset('uploads/category/'.$cateitem->image)}}" alt="">
              <div class="category_title">
                <h2>{{$cateitem->name}}</h2>
            </div>
            </a></div>
@endforeach
</div>

</main>
@endsection