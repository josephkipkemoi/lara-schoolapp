@extends('main')

@section('content')
<div class="container p-4 bg-white">
    <div class="card m-1">
        <div class="bg-primary text-white rounded mb-2">
            <h1 class="p-2">Downloads</h1>
        </div>

        @foreach($downloads as $download)
            <div class="card-header bg-warning m-2 rounded">{{$download->title}}</div>
            <div class="card-body d-flex column w-100 p-4">
                <a href="downloads/show/{{$download->download_file}}" class="p-2 bd-highlight">{{$download->download_file}}</a>
                <a href="downloads/show/{{$download->download_file}}" class="btn btn-outline-secondary">Download</a>
            </div>
        @endforeach
    </div>
  
</div>
@endsection