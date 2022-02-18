@extends('main')

@section('content')
<div class="container bg-white">
<h1>Add School Management</h1>
<form action={{route('management.store')}} method="POST">
@csrf
   <div class="form-row">

        <div class="form-group col-md-4 mt-2 mb-2">
        <label for="department">Department</label>
            <select name="department" class="form-control" id="department">
                @foreach($departments as $key => $department)
                    <option value="{{$key+1}}">{{$department->department}}</option>
                @endforeach
            </select>
        </div>
 
        <div class="form-group col-md-4">
            @error('full_name')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="full_name">Full Name</label>
            <input type="full_name" id="full_name" class="form-control" placeholder="Full Name" name="full_name" value={{old('full_name')}}>
        </div>
        <div class="form-group col-md-4">
            @error('role')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="role">Role</label>
            <input type="role" id="role" class="form-control" placeholder="Role" name="role" value={{old('role')}}>
        </div>
      
        <button class="btn btn-primary mt-4 mb-4" type="submit">Add Staff</button>
  </div>
</form>
</div>
@endsection