@extends('main')

@section('content')
<div class="container bg-white">
<h1>File to be Downloaded</h1>

    <form method="POST" action={{route('download.store')}} enctype="multipart/form-data">
     @csrf
        <div class="form-group col-md-4">
            @error('title')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="title">Add Title</label>
            <input id="title" type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="Add Title..."/>
        </div>

        <div class="form-group col-md-4">
            @error('download_file')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="download_file">Add File (pdf)</label>
            <input id="download_file" type="file" name="download_file" class="form-control" value="{{old('download_file')}}"/>
         </div>
        
         <button type="submit" class="btn btn-primary mt-2 mb-2">Add File</button>
    </form>
</div>
@endsection