@extends('layouts.main')
@section('content')

<div class='container'>
<h1>Student Details</h1>
<form action="{{route('store')}}" method="POST">

{{ csrf_field() }}



<!-- 2 column grid layout with text inputs for the first and last names -->
<div class="row mb-4">
<div class="col">
<div class="form-outline">
<input type="text" id="form3Example1" class="form-control" name="first_name" />
<label class="form-label" for="form3Example1">First name</label>
</div>
</div>
<div class="col">
<div class="form-outline">
<input type="text" id="form3Example2" class="form-control" name="last_name" />
<label class="form-label" for="form3Example2">Last name</label>
</div>
</div>
</div>

<!-- Email input -->
<div class="form-outline mb-4">
<input type="email" id="form3Example3" class="form-control" name="email"/>
<label class="form-label" for="form3Example3">Email address</label>
</div>



<!-- Checkbox -->
<div class="form-outline mb-4">
<input type="number" id="form3Example3" class="form-control" name="phone" />
<label class="form-label" for="form3Example3">Phone number</label>
</div>


<!-- Submit button -->
<button type="submit" class="btn btn-primary btn-block mb-4">add data</button>

<!-- Register buttons -->

</div>
</form>
</div>




@endsection