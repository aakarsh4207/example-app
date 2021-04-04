@extends('layouts.main')
@section('content')
@if(session('success'))

<div class="alert alert-success" role="alert">
{{session('success')}}
</div>

@endif
<div class="container">
<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->first_name}}</td>
      <td>{{$student->last_name}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->phone}}</td>
    <td><a class="btn btn-raised btn-primary btn-sm" href="{{route('edit',$student->id)}}">Edit</a> || Delete</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>






@endsection