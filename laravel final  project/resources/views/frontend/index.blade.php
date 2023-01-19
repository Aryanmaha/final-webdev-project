@extends('layouts.app')

@section('title',"food resources")

@section('title',"food resources")

@section('title',"food resources")
@section('content')
<main class>
        <!-- slider for the homepage -->
        <!-- slider1 starts -->
        <div class="sliders-content">
       <div class="button-left"><i class="fa-solid fa-chevron-left"></i></div> 
        <div class="sliders container">
            @foreach ($all_categories as $all_cate_item)
          <div class="slider_container">
            <a class="slider d-flex align-items-center"  href="{{url('category/'.$all_cate_item->slug)}}">
              <div class="left">
                <img src="{{ asset('uploads/category/'.$all_cate_item->image)}}" alt="blog post 1">
              </div>
              <div class="right">
                <h2>{{$all_cate_item->name}}</h2>
                <p>{{$all_cate_item->description}}</p>
             </div>
            </a>
          </div>
          @endforeach
        </div>
        <div class="button-right"><i class="fa-solid fa-chevron-right"></i></div>
        </div>
        <!-- slider for homepage ends  -->
        <div class="second-main container">
        <div class="second-main-left bg-light">
          <h1>Some posts you might like</h1>
          <div class="second-left-content">

          @foreach($random_post_one as $random_one)
            <div class="second-left-content-left">
            <div class="post_video">
             <iframe width="1000" height="300" src="{!! $random_one-> yt_iframe!!}">
              </iframe>
              </div>
              <a class = "second-left-left-contents" href="{{ url('category/'.$random_one->category->slug.'/'.$random_one->slug)}}">
                <h2> {{ $random_one->name}}</h2>
                <span class="editor-name">{{ $random_one->user->name}}</span>
                <span class="date-updated">{{ $random_one->created_at->format('d/m/Y H:i:s')}}</span>
              </a>
            </div>
            @endforeach

            <div class="second-left-content-right">
            @foreach($random_post_two as $random_two)
              <a class="mini-blog" href="{{ url('category/'.$random_two->category->slug.'/'.$random_two->slug)}}">
                <div class="mini-blog-contents">
                  <h2>{{ $random_two -> name }}</h2>
                  <span class="editor-name">{{ $random_two->user->name}}</span>
                <span class="date-updated">{{ $random_two->created_at->format('d/m/Y H:i:s')}}</span>
                </div>
                </a>
              @endforeach
      
             
            </div>
          </div>
        </div>
        <div class="second-main-right bg-light">
          <h1>latest post....</h1>
          <div class="second-main-right-content" href="">
            @foreach ($latest_posts as $latest_post_item)
            <a class="mini-blog" href="{{ url('category/'.$latest_post_item->category->slug.'/'.$latest_post_item->slug)}}" >
              <div class="mini-blog-contents">
                <h2>{{$latest_post_item-> name}}</h2>
                <span class="editor-name">{{ $latest_post_item->user->name}}</span>
              <span class="date-updated">{{ $latest_post_item->created_at->format('d/m/Y H:i:s')}}</span>
              </div>
            </a>
            @endforeach
          </div>
          <a href="">see more...</a>
        </div>
      </div>

</main>
@endsection