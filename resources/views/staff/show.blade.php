@extends('main')

@section('content')
<div class="container bg-white p-4">
<div class="bg-primary text-white rounded">
<h1 class="p-2">School Staff</h1>
</div>
<table class="table bg-warning rounded">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Subject</th>     
      <th scope="col">Position</th>

      @if(auth()->user() == null)

      @elseif(auth()->user()->role[0]->role == 'Administrator')
      <th scope="col">Remove</th>
      @endif
    </tr>
  </thead>
  <tbody>
    @foreach($personnel as $key => $person)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$person->first_name . ' ' . $person->last_name}}</td>
        <td>{{$person->subject}}</td>        
        <td>{{$person->position}}</td>
        @if(auth()->user() == null)

        @elseif(auth()->user()->role[0]->role == 'Administrator')
        <td>
        <form method="POST" action={{route('personnel.destroy',[$person->id])}}>
         @csrf
         @method('DELETE')
            <button type="submit" class="btn btn-danger">
              <i class="bi bi-x-circle-fill"></i>
            </button>
         </form>
        </td>       
        @endif
      </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection