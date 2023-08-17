@extends('frontend.layouts.master')
@push('title')
<title>blog</title>

@endpush
@section('content')
  <div class="container" >
    <h1 class="text-center text-uppercase mt-5">Create blog</h1>
    <form>
        <div class="form-group mt-5">
          <label for="exampleFormControlInput1 ">Title</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="title">
        </div>
        
  
        <div class="form-group mt-3">
          <label for="exampleFormControlInput1 ">Image</label>
          <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Image URL">
        </div>
        
  
        <div class="form-group mt-3">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        
        
        <button type="submit" class="btn btn-primary  mb-2 mt-5">ADD BLOG</button>
      </form>
  </div>
@endsection
