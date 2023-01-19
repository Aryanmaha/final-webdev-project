<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator; 

class CommentController extends Controller
{
   public function store(Request $request)
   {
    if(Auth::check())
    {
        $validator = Validator::make($request->all(),[
            'comment_body' => 'required|string'
        ]);

        if($validator->fails())
        {
            return redirect()->back()->with('message','comment area is mandatory');
        }
        
        $post = Post::where('slug',$request->post_slug)->where('status','0')->first();
        if($post)
        {
            Comment::create([
                'post_id' => $post->id,
                'user_id' => Auth::user()->id,
                'comment_body' => $request->comment_body
            ]);
            return redirect()->back()->with('message','commented successfully');
        }
        else
        {
            return redirect()->back()->with('message','No such post is found');
        }
    }
    else
    {
        return redirect('login')->with('message','login first to comment');
   }
  }

  public function destroy(Request $request){
    if(Auth::check())
    {
        $comment = Comment::where('id',$request->comment_id)
        ->where('user_id',Auth::user()->id)
        ->first();

        if($comment){
            $comment->delete();
            return response()->json([
                'status' => 200,
                'message' => 'comment deleted successfully'
            ]); 
        }
        else{
            return response()->json([
                'status' => 500,
                'message' => 'something went wrong'
            ]); 
        }

       
    }else
    {
        return response()->json([
            'status' => 401,
            'message' => 'login to delete this comment'
        ]);
    }
  }
}
