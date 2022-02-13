@extends('main');

@section('content')
<div class="container bg-white p-4">
<div class="bg-primary text-white rounded">
   <h1 class="p-2">Contact</h1>
</div>
    <form class="p-4">  
        @csrf
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="colFormLabel" placeholder="Full Name">
            </div>
         </div>
         <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10 mt-2">
            <input type="number" class="form-control" id="colFormLabel" placeholder="Phone Number">
            </div>
         </div>
         <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10 mt-2">
            <input type="email" class="form-control" id="colFormLabel" placeholder="Email Address">
            </div>
         </div>
         <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10 mt-2">
            <textarea   class="form-control" id="colFormLabel" placeholder="Write message here..."></textarea>
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