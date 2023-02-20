@extends('layouts.app')


@section("content")
<dl class="row w-100">
    <dt class="col-sm-3">Öğrenci Adı:</dt>
    <dd class="col-sm-9">{{$student->name}}</dd>
    <dt class="col-sm-3">Öğrenci Katıldığı Kurs Adı:</dt>
    <dd class="col-sm-9">{{$student->course_name}}</dd>
    <dt class="col-sm-3">Öğrenci Doğum Tarihi:</dt>
    <dd class="col-sm-9">{{$student->birth_date}}</dd>
    <dt class="col-sm-3">Öğrenci Yaşı:</dt>
    <dd class="col-sm-9">{{$student->age}}</dd>
    <dt class="col-sm-3">Oluşturulma Tarihi:</dt>
    <dd class="col-sm-9">{{$student->created_at}}</dd>
    <dt class="col-sm-3">Son Güncellenme Tarihi:</dt>
    <dd class="col-sm-9">{{$student->updated_at}}</dd>
</dl>

<div class="d-flex w-100">
    <a href="{{ route('students.edit',$student->id) }}" class="btn btn-primary">GÜNCELLE</a>
    <form method="POST" action="{{ route('students.destroy',$student->id) }}">
        @csrf
        @method('DELETE')
        <input type="submit" value="SİL" class="btn btn-danger">
    </form>
</div>

    
@endsection