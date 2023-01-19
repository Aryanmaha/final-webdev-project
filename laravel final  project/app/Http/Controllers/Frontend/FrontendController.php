<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $all_categories = Category::where('status','0')->get();
        $latest_posts = Post::where('status','0')->orderBy('created_at','DESC')->get()->take(5);
        $random_post_one = Post::inRandomOrder()->where('status','0')->limit(1)->get();
        $random_post_two = Post::inRandomOrder()->where('status','0')->limit(4)->get();
        return view('frontend.index',compact('all_categories','latest_posts','random_post_one','random_post_two'));
    }
    public function category()
    {
        return view('frontend.category');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function viewCategoryPost(string $category_slug)
    {
        $category = Category::where('slug', $category_slug)->where('status','0')->first();
        if($category)
        {
            $post = Post::where('category_id', $category->id)->where('status','0')->paginate(10);
            return view('frontend.post.index',compact('post','category'));
        }else
        {
            return redirect('category');
        }
    }
    public function viewPost(string $category_slug, string $post_slug)
    {
        $category = Category::where('slug', $category_slug)->where('status','0')->first();
        if($category)
        {
            $post = Post::where('category_id', $category->id)->where('slug',$post_slug)->where('status','0')->first();
            return view('frontend.post.view',compact('post'));
        }else
        {
            return redirect('category');
        }
    }
}
