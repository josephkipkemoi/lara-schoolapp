@extends('main')

@section('content')
<div class="container bg-white p-4">
<div class="bg-primary text-white p-2 rounded">
    <h1>Board of Management</h1>
</div>

<div class="card mt-2">
    <div class="card-header bg-warning">Senior Management</div>
    <div class="card-body">
      @foreach($senior_management as $key => $senior)
          <p>{{$key+1 . ' ' . $senior->full_name . ' - ' . $senior->role}}</p>
      @endforeach
    </div>
</div>

 <div class="card mt-2">
    <div class="card-header bg-warning">Board of Management</div>
    <div class="card-body">
      @foreach($board_management as $key => $board)
          <p>{{$key+1 . ' ' . $board->full_name . ' - ' . $board->role}}</p>
      @endforeach 
    </div>
</div>
  <div class="card mt-2">
    <div class="card-header bg-warning">Parents Association</div>
    <div class="card-body">
      @foreach($parents_management as $key => $parent)
          <p>{{$key+1 . ' ' . $parent->full_name . ' - ' . $parent->role}}</p>
      @endforeach
    </div>
  </div>
   <div class="card mt-2">
    <div class="card-header bg-warning">Teaching Staff</div>
    <div class="card-body">
      @foreach($teaching_management as $key => $teacher)
          <p>{{$key+1 . ' ' . $teacher->full_name . ' - ' . $teacher->role}}</p>
      @endforeach
    </div>
  </div>
 
  <div class="card mt-2">
    <div class="card-header bg-warning">Non-Teaching Staff</div>
    <div class="card-body">
      @foreach($non_teaching_management as $key => $non_teacher)
          <p>{{$key+1 . ' ' . $non_teacher->full_name . ' - ' . $non_teacher->role}}</p>
      @endforeach
    </div>
  </div>

</div>
@endsection