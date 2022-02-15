@extends('main')

@section('content')
<div class="container bg-white">
<form method="POST" action={{route('report.storereport')}}>
@csrf
 <div class="form-group col-md-4">
            @error('body')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="body">Report Body</label>
            <textarea id="body" class="form-control" placeholder="Write school report here..." name="body" value={{old('body')}}></textarea>
        </div>
      
        <button class="btn btn-primary mt-4 mb-2" type="submit">Add Report</button>

        <hr/>
</form>
<form action={{route('report.store')}} method="POST" enctype="multipart/form-data">
@csrf
   <div class="form-row">

        <h2>Term Reports</h2>

        <div class="form-group col-md-4">
            @error('report_file')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="report_file">Add Report File (pdf)</label>
            <input id="report_file" type="file" name="report_file" class="form-control" value={{old('report_file')}}/>
         </div>
        
        <div class="form-group col-md-4">
            @error('grade')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="grade">Grade/Class</label>
            <select id="grade" name="grade" class="form-control" value={{old('grade')}}>
                 <option value="PP1">PP1</option>
                 <option value="PP2">PP2</option>
                 <option value="One">1</option>
                 <option value="Two">2</option>
                 <option value="Three">3</option>
                 <option value="Four">4</option>
                 <option value="Five">5</option>
                 <option value="Six">6</option>
                 <option value="Seven">7</option>
                 <option value="Eight">8</option>
            </select>
        </div>

        <div class="form-group col-md-4">
            @error('term')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="term">Term</label>
            <select id="term" name="term" class="form-control" value={{old('term')}}>
                 <option value="One">One</option>
                 <option value="Two">Two</option>
                 <option value="Three">Three</option>
            </select>
        </div>

        <div class="form-group col-md-4">
            @error('year')
                <span class="d-block text-danger">{{$message}}</span>
            @enderror
            <label for="year">Year</label>
            <input type="date" class="form-control" name="year"/>
        </div>

        <button class="btn btn-primary mt-4 mb-4" type="submit">Submit Report</button>
  </div>
</form>
</div>
@endsection