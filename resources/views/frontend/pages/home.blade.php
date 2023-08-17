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
        <div class="blogItem-wrap">
            <img src="https://64b54d877dfaf80d36e00278--venerable-kataifi-39b7bb.netlify.app/assets/images/designer-1.jpg" alt="cover" class="blogItem-cover"/>
            <p class='chip'>
                development
            </p>
            <h3>7 CSS tools you should be using</h3>
            <p class="blogItem-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <footer>
               <div class="blogItem-author">
                <img src="https://64b54d877dfaf80d36e00278--venerable-kataifi-39b7bb.netlify.app/assets/images/author.jpg" alt='avatar'/>
                <div>
                    <h6>John Doe</h6>
                    <p>cJune 03, 2021</p>
                </div>
               </div> 
               <a  href="{{ url('/singleBlog') }}"class="blogItem-link">→</a> 
            </footer>
    
        </div>

        <div class="blogItem-wrap">
            <img src="https://64b54d877dfaf80d36e00278--venerable-kataifi-39b7bb.netlify.app/assets/images/f67396fc3cfce63a28e07ebb35d974ac.jpg" alt="cover" class="blogItem-cover"/>
            <p class='chip'>
                travel
            </p>
            <h3>7 CSS tools you should be using</h3>
            <p class="blogItem-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <footer>
               <div class="blogItem-author">
                <img src="https://64b54d877dfaf80d36e00278--venerable-kataifi-39b7bb.netlify.app/assets/images/author.jpg" alt='avatar'/>
                <div>
                    <h6>John Doe</h6>
                    <p>cJune 03, 2021</p>
                </div>
               </div> 
               <a  href="{{ url('/singleBlog') }}"class="blogItem-link">→</a> 
            </footer>
    
        </div>

        <div class="blogItem-wrap">
            <img src="https://64b54d877dfaf80d36e00278--venerable-kataifi-39b7bb.netlify.app/assets/images/fQwuyKJ9qxjSbr6REcgtmW-1200-80.jpg" alt="cover" class="blogItem-cover"/>
            <p class='chip'>
                shopping
            </p>
            <h3>7 CSS tools you should be using</h3>
            <p class="blogItem-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <footer>
               <div class="blogItem-author">
                <img src="https://64b54d877dfaf80d36e00278--venerable-kataifi-39b7bb.netlify.app/assets/images/author.jpg" alt='avatar'/>
                <div>
                    <h6>John Doe</h6>
                    <p>cJune 03, 2021</p>
                </div>
               </div> 
            
            <a  href="{{ url('/singleBlog') }}"class="blogItem-link">→</a> 
            </footer>
    
        </div>


   </div>
@endsection
