@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-8">
    <a class="col-md-offset-5 btn btn-primary" href="{{route('home.create')}}">Register a Course</a>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>unique code</th>
            <th>course name</th>
            <th>teacher name</th>
            <th>total of hours</th>
            <th>edit</th>
            <th>delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach($courses as $course)
          <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->coursename}}</td>
            <td>{{$course->teachername}}</td>
            <td>{{$course->totalhours}}</td>
            <td><a href="{{ route('home.edit', $course->id) }}" class="btn btn-primary">edit</a></td>
            <td>
                <form id="delete-{{$course->id}}" method="post" action="{{ route('home.destroy', $course->id) }}">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger">delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
  </div>
  </div>
</div>
@endsection
