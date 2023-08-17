@extends('frontend.layouts.master')
@push('title')
<title>Blog single</title>

@endpush
@push('css')
<link rel="stylesheet" href="{{asset('frontend/css/singleBLog.css')}}">
@endpush
@section('content')
 
<div class="container mt-5">
    <a class='blog-goBack' href="{{url('/')}}"><span>&#8592;</span>Go Back</a>
    <div class='blog-wrap'>
      <header>
         <p class='blog-date'>{{$blog->created_at}}</p>
         <h1>{{$blog->title}}</h1>
         <div class='blog-subCategory'>
           {{-- <div>
            <Chip key={index}  
            lable={category}/>
        </div> --}}
         </div>   


         </header>
         <img src="{{$blog->image_url}}" alt='cover'/>
         <p  class='blog-desc'>{{$blog->description}}</p>
     </div>
    
 </div>

@endsection

@push('js')
    <script>
        jkdfgfskjg
    </script>
@endpush
