@extends('layouts.app')

@section('title',"$post->meta_title")

@section('title',"$post->meta_description")

@section('title',"$post->meta_keyword")

@section('content')
<div class="container post_page">
    <div class="post_title">
    <h1>{!! $post->name !!}</h1>
    <H2>{!!$post->category->name !!}</h2>
    </div>
    <div class="post_video">
    <iframe width="700" height="345" src="{!! $post-> yt_iframe!!}">
      </iframe>
    </div>
    <div class="post_description"> {!!$post->description!!}</div>
          <div class="post_author">
        <h3>Posted by: {{ $post->user->name}}</h3>
        <h3>Posted On: {{ $post->created_at->format('d/m/Y H:i:s')}}</h3>
    </div>
</div>

<div class="comment-area container mt-4">
    @if(session('message'))
    <h6 class="alert alert-warning md-3">{{session('message')}}</h6>
    @endif
    <div class="card card-body">
        <h6 class="card-title">Leave a comment</h6>
        <form action="{{ url('comments')}}" method="POST">
            @csrf
            <input type="hidden" name="post_slug" value="{{ $post->slug}}">
            <textarea name="comment_body" class="form-control" rows="3" required></textarea>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>

    @forelse ($post-> comments as $comment)
    <div class="comment-container card card-body shadow-sm mt-3">
        <div class="detail-area">
            <h6 class="User-name mb-1">
                @if ($comment->user)
                {{ $comment->user->name }}
                @endif
                <small class="ms-3 text-primary"> commented on: {{$comment->created_at->format('d/m/Y H:i:s')}}</small>
            </h6>
            <p class="user-comment mb-1">
                {!! $comment->comment_body !!}
            </p>
        </div>
        @if(Auth::check() && Auth::id() == $comment->user_id)
        <div>
            <button type="button" value="{{ $comment->id }}" class="deleteComment btn btn-danger me-2" style="color:white!important;">Delete</button>
        </div>
        @endif
    </div>
    @empty
    <div class="card card-body shadow-sm mt-3">
    <h6>No comments Yet.</h6>
</div>
    @endforelse
</div>

@endsection

@section('scripts')
<script>
     $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
    });

    $(document).ready(function () {
        $(document).on('click','.deleteComment',function(){
            if(confirm('Are you sure you want to delete this comment'))
            {
                var thisClicked = $(this);
                var comment_id = thisClicked.val();

                $.ajax({
                    type: "POST",
                    url: "/delete-comment",
                    data: {
                        'comment_id' : comment_id
                    },
                    success: function (res){
                        if(res.status == 200){
                            thisClicked.closest('.comment_container').remove();
                            alert(res.message);
                        }else{
                            alert(res.message);
                        }
                    }
                });
            }
        });
    });
</script>
@endsection