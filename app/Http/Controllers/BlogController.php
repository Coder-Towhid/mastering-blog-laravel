<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller {

    //
    
    
    public function index(){
            
    return view('frontend.pages.blog');


    }

   


    
    public function store(Request $request)
    {
        // Validate the form data
        
        $title = $request->input('title');
        $imageUrl = $request->input('image_url');
        $description = $request->input('description');
        
        // Process the form data, save to database, etc.
        $blog = Blog::create([
            'title' => $title,
            'image_url' => $imageUrl,
            'description' => $description,
        ]);
        


        return redirect()->route('home');
    }

    
}
