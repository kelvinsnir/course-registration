@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<h2>Register course</h2>
          <form action="{{ route('home.store')}}" method="post" >
			  	@csrf
			    <div class="form-group">
			      <label>Course Name</label>
			      <input type="text" class="form-control" name="coursename" placeholder="Enter course name" required="">
			    </div>
			    <div class="form-group">
			      <label>Teacher Name</label>
			      <input type="text" class="form-control" name="teachername" placeholder="Enter teacher name" required="">
			    </div>
			    <div class="form-group">
			      <label>Total of Hours</label>
			      <input type="number" class="form-control" name="totalhours" placeholder="Enter number of hours" required="">
			    </div>
			    <button type="submit" class="btn btn-primary">Register course</button>
          </form>
            
        </div>
    </div>
</div>
@endsection
