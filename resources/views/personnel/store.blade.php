@extends('main');

@section('content')
<div class="container bg-white p-4">
<form action={{route('personnel.store')}} method="POST">
@csrf
   <div class="form-row">
 
        <div class="form-group col-md-4">
            @error('first_name')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" class="form-control" placeholder="First name" name="first_name" value={{old('first_name')}}>
        </div>
        <div class="form-group col-md-4">
           @error('last_name')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" class="form-control" placeholder="Last name" name="last_name" value={{old('last_name')}}>
        </div>
         <div class="form-group col-md-4">
            @error('subject')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="subject">Subject</label>
            <input type="text" id="subject" class="form-control" placeholder="Subject" name="subject" value={{old('subject')}}>
        </div>
        <div class="form-group col-md-4">
            @error('position')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="position">Position</label>
            <input type="text" id="position" class="form-control" placeholder="Position" name="position" value={{old('position')}}>
        </div>
        <button class="btn btn-primary mt-4" type="submit">Add Personnel</button>
  </div>
</form>
</div>
@endsection
