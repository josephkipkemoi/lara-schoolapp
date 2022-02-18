@extends('main')

@section('content')
<div class="container h-50 bg-white p-4">
  <div class=" bg-primary rounded text-white">
    <h1 class="p-2">About Our School</h1>
  </div>
  <div class="card">
  <div class="card-header bg-warning text-black">Laini Saba Primary School</div>
  <div class="card-body">
    @foreach($biographies as $biography)
      <p>{{$biography->school_background}}</p>
    @endforeach
  </div>
  </div>
  
  
</div>
 

@endsection