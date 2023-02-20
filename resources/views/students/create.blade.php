@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('students.store') }}">
        @csrf


        Kurs: 
        <select name="course_id" id="">
            @foreach ($courses as $course)
                <option value="{{ $course->id  }}">{{ $course->name}}</option>
            @endforeach
        
        </select>
        <br>
        Doğum Tarihi: <input type="date" name="birth_date" id="">
        <br>
        İsim: <input type="text" name="name" id="">
        <br>
        <input type="submit" value="submit">

    </form>
@endsection