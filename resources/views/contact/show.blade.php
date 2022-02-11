@extends('main');


@section('content')
<div class="container bg-white p-4 rounded">
    <form>  
        @csrf
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="colFormLabel" placeholder="Full Name">
            </div>
         </div>
         <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
            <input type="number" class="form-control" id="colFormLabel" placeholder="Phone Number">
            </div>
         </div>
         <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" id="colFormLabel" placeholder="Email Address">
            </div>
         </div>
         <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10">
            <textarea   class="form-control" id="colFormLabel" placeholder="Write message here..."></textarea>
            </div>
         </div>
         <button class="btn btn-primary">Send Message</button>
    </form>
</div>

@endsection