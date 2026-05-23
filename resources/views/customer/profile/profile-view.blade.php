@extends('customer.master')

@section('content')

 <div class="body flex-grow-1">
  <div class="container-lg px-4">

  <form action="{{url('/customer/profile-update')}}" method="post" enctype="multipart/form-data">
     @csrf
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
   <input type="text" name="name" class="form-control" value="{{ $authuser->name}}" placeholder="Your Name*" aria-label="username" aria-describedat="basic-addon1" required>
  </div>

   <div class="input-group mb-3" >
    <input type="text" name="phone" class="form-control" value="{{ $authuser->phone}}" placeholder="Your Phone">
 </div>  

   <div class="input-group mb-3" >
    <input type="file" name="image" class="form-control" value="{{ $authuser->image}}">
    </div>

     @if ( $authuser->image != null)
        <img src="{{ $authuser->image}}" width="100" height="100"> 

        @else
         <img src="{{asset('customer/user/user image.png')}}" width="100" height="100"> 

     @endif

      <div class="input-group mt-4" >
    <input type="submit" class="btn btn-success text-white"  name="submit" class="form-control">
    </div> 

  </form> 
 </div>  
 </div>  

@endsection