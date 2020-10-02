@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<h2>Edit course</h2>
          <form action="{{ route('home.update', $course->id)}}" method="post" >
			  	@csrf @method('PUT')
			    <div class="form-group">
			      <label>Course Name</label>
			      <input type="text" class="form-control" name="coursename" value="{{$course->coursename}}" required="">
			    </div>
			    <div class="form-group">
			      <label>Teacher Name</label>
			      <input type="text" class="form-control" name="teachername" value="{{$course->teachername}}" required="">
			    </div>
			    <div class="form-group">
			      <label>Total of Hours</label>
			      <input type="number" class="form-control" name="totalhours" value="{{$course->totalhours}}" required="">
			    </div>
			    <button type="submit" class="btn btn-primary">Edit</button>
			    <a href="{{ route('home.index') }}" class="btn btn-primary">Cancel</a>
          </form>
            
        </div>
    </div>
</div>
@endsection
