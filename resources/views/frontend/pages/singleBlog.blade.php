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
         <p class='blog-date'>Published June 03, 2021</p>
         <h1>7 CSS tools you should be using</h1>
         <div class='blog-subCategory'>
           {{-- <div>
            <Chip key={index}  
            lable={category}/>
        </div> --}}
         </div>   


         </header>
         <img src="https://64b54d877dfaf80d36e00278--venerable-kataifi-39b7bb.netlify.app/assets/images/designer-1.jpg" alt='cover'/>
         <p  class='blog-desc'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
     </div>
    
 </div>

@endsection

@push('js')
    <script>
        jkdfgfskjg
    </script>
@endpush
