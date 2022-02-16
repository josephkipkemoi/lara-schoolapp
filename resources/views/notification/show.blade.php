@extends('main')

@section('content')
<div class="container bg-white">
    <h1>Message Inbox</h1>
    <a href="#" class="btn btn-primary">Mark all as Read</a>
    @foreach($messages as $message)
    <div>
        <span>{{$message->full_name}}</span>
        <span>{{$message->phone_number}}</span>
        <span>{{$message->title}}</span>
        <a href="#" class="btn btn-primary">View Message</a>
        <a href="#" class="btn btn-primary">Mark as Read</a>
    </div>
    @endforeach

    <a href="/dashboard" class="btn btn-primary">Dashboard</a>
</div>
@endsection