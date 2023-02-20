@extends('layouts.app')

@section('content')
<form method="POST" action="{{route("students.update",$student->id)}}" >
    @csrf
    @method('PUT')
    
    <input type="text" name="name" class="form-control" value="{{ old('name') ? old('name') : $student->name}}" placeholder="Enter course name...">
    @error('name')
        <br>
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror
    <br>
    <select name="course_id" id="">
        @foreach ($courses as $course)
            <option value="{{ $course->id  }}">{{ $course->name}}</option>
        @endforeach
    
    </select>
    @error('lecturers')
        <br>
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror
    <br>
    <input type="date" name="birth_date" class="form-control" value="{{old('available_seats') ? old('available_seats') : $student->available_seats}}" placeholder="Enter avaiblable seats count..">
    @error('birth_date')
        <br>
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror
    <br>
    <input type="submit" class="btn btn-primary"    value="submit">
</form>
@endsection