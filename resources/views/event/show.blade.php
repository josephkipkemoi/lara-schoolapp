@extends('main');

@section('content')
<div class="container bg-white p-4 ">

    <div class="bg-primary text-white rounded p-2 d-flex">
    <h1 class="ml-1">Events Calendar | 2022</h1>
    </div>

    <div class="card mt-2 p-4">
        @foreach($events as $event)   
            
        <div class="card-header bg-success text-white p-2 mt-2">
            <small>Written by {{$event->user->name}} on </small>
            <small>{{$event->created_at}}</small>
        </div> 
        <div class="card-header bg-warning text-black">{{$event->title}}</div>
            <div class="card card-body">
                <p>{{$event->body}}</p>
                    <div class="col card-body p-2 rounded d-flex justify-content-between">
                        <a href="#" class="btn btn-outline-secondary"><i class="bi bi-download"></i> Download</a>
                        <a href="#" class="btn btn-outline-secondary"><i class="bi bi-printer"></i> Print</a>
                    </div>
            </div>
    
        @endforeach
    </div>

</div>
@endsection