@extends('layouts.app')

@section('content')
<form method="POST" action="{{route("courses.update",$course->id)}}" >
    @csrf
    @method('PUT')
    
    <input type="text" name="name" class="form-control" value="{{ old('name') ? old('name') : $course->name}}" placeholder="Enter course name...">
    @error('name')
        <br>
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror
    <br>
    <input type="text" name="lecturers" class="form-control" value="{{old('lecturers') ? old('lecturers') : $course->lecturers}}" placeholder="Enter lecturer  name (optional)...">
    @error('lecturers')
        <br>
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror
    <br>
    <input type="number" name="available_seats" class="form-control" value="{{old('available_seats') ? old('available_seats') : $course->available_seats}}" placeholder="Enter avaiblable seats count..">
    @error('available_seats')
        <br>
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror
    <br>
    <input type="submit" class="btn btn-primary"    value="submit">
</form>
@endsection