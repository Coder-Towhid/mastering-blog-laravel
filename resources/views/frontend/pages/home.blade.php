@extends('frontend.layouts.master')
@push('title')
    <title>home</title>
@endpush

@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/homePage.css') }}">
@endpush

@section('content')
    <header class="home-header">
        <h2>Inc, This Morning</h2>
        <h1>
            <span>❝</span> Blog <span>❞</span>
        </h1>
        <p>awesome place to make oneself <br /> productive and entertained throught
            daily updates
        </p>
    </header>


    <div class='searchBar-wrap'>
        <form onSubmit={formSubmit}>
            <input type='text' placeholder='Search By Category' />

            <button>Go</button>

        </form>

    </div>



    <div class="bloglist-wrap container">




        @foreach($blogs as $blog)
        <div class="blogItem-wrap">
            <img src="{{$blog->image_url}}" alt="cover" class="blogItem-cover"/>
            <p class='chip'>
                development
            </p>
            <h3>{{$blog->title}}</h3>
            <p class="blogItem-desc">{{$blog->description}}.</p>
            <footer>
               <div class="blogItem-author">
                <img src="https://64b54d877dfaf80d36e00278--venerable-kataifi-39b7bb.netlify.app/assets/images/author.jpg" alt='avatar'/>
                <div>
                    <h6>John Doe</h6>
                    <p>cJune 03, 2021</p>
                </div>
               </div> 
               <a  href="{{ url('/single-blog',['id' => $blog->id])  }}"class="blogItem-link">→</a> 
            </footer>
    
        </div>
        @endforeach
      


   </div>
@endsection
