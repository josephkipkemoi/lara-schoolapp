 @extends('main');

@section('content')
<div class="container bg-white">
<h1>Add School Event</h1>
<form action={{route('event.store')}} method="POST">
@csrf
   <div class="form-row">
 
        <div class="form-group col-md-4">
            @error('title')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="title">Title</label>
            <input type="text" id="title" class="form-control" placeholder="Report Title..." name="title" value={{old('title')}}>
        </div>
        <div class="form-group col-md-4">
            @error('body')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="body">Message Body</label>
            <textarea id="body" class="form-control" placeholder="Write report here..." name="body" value={{old('body')}}></textarea>
        </div>
      
        <button class="btn btn-primary mt-4" type="submit">Add Event</button>
  </div>
</form>
</div>
@endsection