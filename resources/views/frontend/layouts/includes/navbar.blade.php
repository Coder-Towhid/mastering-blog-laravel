<nav class="navbar navbar-expand-lg  " style="background-color: #b0c4de;">
    <div class="container-fluid container">
        @php
            
        @endphp
        <a class="navbar-brand" href="{{route('home')}}">BLOG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end text-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link " aria-current="page" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ url('/blog') }}">Create Blog</a>
                <a class="nav-link" href="{{ url('/login') }}">Login</a>
                {{-- <a class="nav-link" href="{{ url('/blog:id') }}">SingleBlog</a> --}}

            </div>
        </div>
    </div>
</nav>
