@extends('main')

@section('content')
<div class="container bg-white">
    <div class="row">
        @foreach($photos as $photo)
        <div class="col-sm">
            <img class="img-thumbnail" src="{{ asset($photo->photo) }}" alt={{$photo->photo}} />
        </div>
        @endforeach
    </div>
</div>
@endsection