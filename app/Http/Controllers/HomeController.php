<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        
        $blogs = Blog::all(); // Retrieve all blogs from the 
       

        return view('frontend.pages.home', compact('blogs'));

        
    }

    public function show($id)
        {
            $blog = Blog::findOrFail($id);
            return view('frontend.pages.singleBlog', compact('blog'));
        }

}
