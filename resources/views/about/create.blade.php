@extends('main')

@section('content')
<div class="container bg-white">
   <h1>Add School Biography</h1>
        <form action={{route('about.store')}} method="POST">
        @csrf
        <div class="form-row">
        
                <div class="form-group col-md-4">
                    @error('school_background')
                        <span class="d-block text-danger">{{$message}}</span>
                    @enderror
                    <label for="school_background">School Background</label>
                    <textarea id="school_background" class="form-control" placeholder="Write school background here..." name="school_background" value={{old('school_background')}}></textarea>
                </div>
                <div class="form-group col-md-4">
                    @error('academic_background')
                        <span class="d-block text-danger">{{$message}}</span>
                    @enderror
                    <label for="academic_background">Academic Background</label>
                    <textarea id="academic_background" class="form-control" placeholder="Write academic report here.." name="academic_background" value={{old('academic_background')}}></textarea>
                </div>
            
                <button class="btn btn-primary mt-4" type="submit">Add Bio</button>
        </div>
        </form>
</div>
@endsection