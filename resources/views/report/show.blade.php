@extends('main');

@section('content')
<div class="container bg-white p-4">
<div class="bg-primary text-white rounded">
    <h1 class="p-2">School Report</h1>
</div>
<div class="row p-2">
    <div class="col card-body p-2 rounded d-flex justify-content-between">
        <a href="#" class="btn btn-outline-secondary"><i class="bi bi-download"></i> Download</a>
        <a href="#" class="btn btn-outline-secondary"><i class="bi bi-printer"></i> Print</a>
    </div>
    <div class="col ">
    <span class="text-success">Report By: Mrs. Beatrice Elachi | School Principal</span>
    <p>
        The Student Have come home with reports form for Third Term 2021 and we have sent the same through the SMS PLATFORM. 
        We are requesting the parents to go through those report forms and discuss with your daughter on the weak subjects 
        and improvement of the other subjects that are fairly done.
    </p>
    </div>
</div>
<div class="bg-primary text-white rounded">
    <h1 class="p-2">Exam Results</h1>
</div>
<div class="card-body">
    <table class="table bg-warning rounded">
    <thead>
        <tr>
        <th scope="col">Link</th>
        <th scope="col">Class/Grade</th>
        <th scope="col">Term</th>
        <th scope="col">Year</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row"><a href="#">Download <i class="bi bi-download"></i></a></th>
        <td>One</td>
        <td>Mid-Term</td>
        <td>2022</td>
        </tr>
        <tr>
        <th scope="row"><a href="#">Download <i class="bi bi-download"></i> </a></th>
        <td>Two</td>
        <td>Mid-Term</td>
        <td>2022</td>
        </tr>
        <tr>
        <th scope="row"><a href="#">Download <i class="bi bi-download"></i></a></th>
        <td>Three</td>
        <td>Mid-Term</td>
        <td>2022</td>
        </tr>
    </tbody>
    </table>
</div>

</div>
@endsection