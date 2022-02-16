@extends('main')

@section('content')
<div class="container bg-white">
    <h1>Add Photo Album</h1>

<div class="form-row">
    <div class="form-group col-md-4">
        <form method="POST" action={{route('album.store')}} enctype="multipart/form-data">
        @csrf
            @error('album_name')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="album_name">Album Name</label>
            <input id="album_name" class="form-control" type="text" placeholder="Album Name..." name="album_name"/>
            @error('photo')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="photo">Add Photo (s)</label>
            <input id="photo" class="form-control" type="file" name="photo[]" multiple accept="image/*"/>

            <button class="btn btn-primary mt-2 mb-2">Upload Photo Album</button>
        </form>
    </div>
</div>

</div>
@endsection