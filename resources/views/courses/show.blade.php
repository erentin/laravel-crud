@extends('layouts.app')


@section("content")
<dl class="row w-100">
    <dt class="col-sm-3">Kurs Adı:</dt>
    <dd class="col-sm-9">{{$course->name}}</dd>
    <dt class="col-sm-3">Öğretmen Adı:</dt>
    <dd class="col-sm-9">{{$course->lecturers}}</dd>
    <dt class="col-sm-3">Kontenjan:</dt>
    <dd class="col-sm-9">{{$course->available_seats}}</dd>
    <dt class="col-sm-3">Oluşturulma Tarihi:</dt>
    <dd class="col-sm-9">{{$course->created_at}}</dd>
    <dt class="col-sm-3">Son Güncellenme Tarihi:</dt>
    <dd class="col-sm-9">{{$course->updated_at}}</dd>
</dl>
<ol>
    @foreach ($course->students as $student)
        
    <li>
        {{$student->name}} 
        @if ($student->age)
           - {{$student->age}} Yaşında
        @endif
    </li>
    @endforeach
</ol>

<a href="{{route("courses.edit",$course->id)}}" class="btn btn-primary">güncelle</a>

<form method="POST" action="{{route("courses.destroy",$course->id)}}" >
    @csrf
    @method("DELETE")
    <button type="submit" class="btn btn-danger">Sil</button>
</form>
@endsection