@extends('layouts.app')


@section('content')

    <hr>
    @foreach ($courses as $course)
    <div class="col">
        <dl class="row w-100">
            <dt class="col-sm-3">Kurs Adı:</dt>
            <dd class="col-sm-9">{{$course->name}} - {{$course->id}} </dd>
            <dt class="col-sm-3">Öğretmen Adı:</dt>
            <dd class="col-sm-9">{{$course->lecturers}}</dd>
            <dt class="col-sm-3">Kontenjan:</dt>
            <dd class="col-sm-9">{{$course->available_seats}}</dd>
        </dl>
        <a href=" {{ route('courses.show',$course->id) }}" class="btn btn-primary btn-block">KURS DETAYINA GİT</a>
    </div>
    <hr>
    @endforeach

@endsection