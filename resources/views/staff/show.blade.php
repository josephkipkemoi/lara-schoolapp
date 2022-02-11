@extends('main');


@section('content')
<div class="container bg-white p-4">
<div class="bg-primary text-white rounded">
<h1 class="p-2">School Staff</h1>
</div>
 
<table class="table bg-warning rounded">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Subject</th>
      <th scope="col">Name</th>
      <th scope="col">Position</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>English</td>
      <td>Odhiambo Azambo</td>
      <td>Physical Education</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Kiswahili</td>
      <td>Sarah Kimani</td>
      <td>Mathematics</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Physical Education</td>
      <td>Frank Kimanzi</td>
      <td>Social Studies</td>
    </tr>
  </tbody>
</table>
</div>
@endsection