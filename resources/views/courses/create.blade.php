@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('courses.store')}}">
    @csrf
    <input type="text" class="form-control" name="name" value="{{ old('name')  }}" placeholder="Enter course name..." required>
    @error('name')
        <br>
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror
    <br>
    <input type="text" class="form-control" name="lecturers" value="{{ old('lecturers')  }}" placeholder="Enter lecturer  name (optional)..." required>
    @error('lecturers')
        <br>
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror
    <br>
    <input type="number" class="form-control" name="available_seats" value="{{ old('available_seats')  }}" placeholder="Enter avaiblable seats count.." required>
    @error('available_seats')
        <br>
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror
    <br>
    <input type="submit" class="btn btn-primary btn-block" value="Submit">
</form>
@endsection