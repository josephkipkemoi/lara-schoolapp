@extends('main')

@section('content')
<div class="container bg-white p-4">

<div class="bg-primary text-white rounded">
    <h1 class="p-2">School Report</h1>
</div>

@foreach($school_reports as $school_report)
<div class="card row p-2 mb-2">
    <div class="col card-body p-2 rounded d-flex justify-content-between">
            <a href="#" class="btn btn-outline-secondary"><i class="bi bi-download"></i> Download</a>
            <a href="#" class="btn btn-outline-secondary"><i class="bi bi-printer"></i> Print</a>
        @if(auth()->user() == null)

        @elseif(auth()->user()->role[0]->role == 'Administrator')
        <form method="POST" action={{route('report.deletereport', [$school_report->id])}}>
            @csrf
            @method('DELETE')
                <button class="btn btn-danger" type="submit"><i class="bi bi-x-circle-fill"></i></button>
        </form>
        @endif
    </div>
    <div class="col ">
        <span class="text-success">Report By: {{$school_report->user->name}} on {{$school_report->created_at}}</span>
        <p>{{$school_report->body}}</p>
    </div>
</div>
@endforeach

<div class="bg-primary text-white rounded">
    <h1 class="p-2">Exam Results</h1>
</div>

<div class="card-body">
    <table class="table bg-warning rounded">
    <thead>
        <tr>
        <th scope="col">Report Form</th>
        <th scope="col">Class/Grade</th>
        <th scope="col">Term</th>
        <th scope="col">Year</th>
        </tr>
    </thead>
    @foreach($reports as $report)
    <tbody>
        <tr>
        <th scope="row"><a href="report/show/{{$report->report_file}}">Download <i class="bi bi-download"></i></a></th>
        <td>{{$report->grade}}</td>
        <td>{{$report->term}}</td>
        <td>{{$report->year}}</td>
        </tr>
    </tbody>
    @endforeach
    </table>
</div>





</div>
@endsection