@extends('main')

@section('content')
|<div class="container p-4 bg-white">
        <div class="p-2 bg-primary text-white rounded">
            <h1>Our journey in pictures</h1>
        </div>
        <div class="row">

            @foreach($albums as $album)
            <div class="col-sm">
                <a href={{route('album.show', [$album->id])}} class="btn btn-outline-primary">
                    <img class="d-block img-thumbnail" src="{{ asset($album->photo()->first()->photo) }}" alt="album"/>
                    {{$album->album_name}}
                </a>
            </div>
            @endforeach

        </div>
</div>
@endsection