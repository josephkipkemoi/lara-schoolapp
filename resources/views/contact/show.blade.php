@extends('main')

@section('content')
<div class="container bg-white p-4">
<div class="bg-primary text-white rounded">
   <h1 class="p-2">Contact</h1>
</div>
    <form class="p-4" method="POST" action={{route('contact.store')}}>  
        @csrf
          <div class="form-group row">
            @error('full_name')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="colFormLabel" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="colFormLabel" placeholder="Full Name" name="full_name" value={{old('full_name')}}>
            </div>
         </div>
         <div class="form-group row">
            @error('phone_number')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="colFormLabel" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10 mt-2">
            <input type="number" class="form-control" id="colFormLabel" placeholder="Phone Number" name="phone_number" value={{old('phone_number')}}>
            </div>
         </div>
         <div class="form-group row">
            @error('email')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10 mt-2">
            <input type="email" class="form-control" id="colFormLabel" placeholder="Email Address" name="email" value={{old('email')}}>
            </div>
         </div>
        <div class="form-group row">
            @error('title')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="colFormLabel" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10 mt-2">
            <input type="text" class="form-control" id="colFormLabel" placeholder="Title" name="title" value={{old('title')}}>
            </div>
         </div>
         <div class="form-group row">
            @error('message')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="colFormLabel" class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10 mt-2">
            <textarea   class="form-control" id="colFormLabel" placeholder="Write message here..." name="message" value={{old('message')}}></textarea>
            </div>
         </div>
         <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-primary">
            <i class="bi bi-send"></i>
            Send Message
            </button>
         </div>
    </form>
</div>

@endsection