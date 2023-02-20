@extends('layouts.app')


@section('content')

@foreach ($students as $student)
<div>
    {{-- @dd($student) --}}
    <dl class="row w-100">
        <dt class="col-sm-3">Öğrenci Adı:</dt>
        <dd class="col-sm-9">{{$student->name}}</dd>
        <dt class="col-sm-3">Öğrencinin Katıldığı Kurs Adı:</dt>
        <dd class="col-sm-9">{{$student->course_name}}</dd>
        <dt class="col-sm-3">Öğrenci Yaş:</dt>
        <dd class="col-sm-9">{{$student->age}}</dd>
    </dl>
    <a href="{{ route('students.show',$student) }}" class="btn btn-primary">DETAYA GİT</a>
</div>
@endforeach
@endsection