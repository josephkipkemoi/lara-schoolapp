@extends('main')

@section('content')
<div class="container h-50 bg-white p-4">
  <div class="d-flex justify-content-center bg-success">
    <x-home.carousel.carousel></x-home.carousel.carousel>
  </div>

  <div class="row">      
   <div class="col-10">
      <h1 class="ml-2 p-2">Laini Saba Primary School</h1>

<div id="accordion">
  <div class="card">
  @foreach($biographies as $biography)
    
    <div class="card-header bg-warning" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-outline-success text-black" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         School History Background
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
          <p>{{$biography->school_background}}</p>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header bg-warning" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-outline-success text-black collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Academic Background
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <p>{{$biography->academic_background}}</p>
      </div>
    </div>
  </div>

  @endforeach


  <div class="card">
    <div class="card-header bg-warning" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-outline-success text-black collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Upcoming Events
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        @foreach($events as $event)
          
        @endforeach
      </div>
    </div>
  </div>
</div>

  </div>

  <x-home.sidebar.sidebar></x-home.sidebar.sidebar>

  </div>
 
 
</div>

@endsection