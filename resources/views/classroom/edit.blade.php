@extends('display.home')
@section('title')
    Edit Classroom
@endsection
@section('content')
    <form action="{{ route('classrooms.update', $edit->id) }}" method="POST">
        @csrf
        <br />
        @method('PUT')
        <input type="hidden" name="id" value="{{$edit->id}}">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="classroom_name" value="{{$edit->classroom_name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Roof</label>
            <input type="text" name="roof"  class="form-control" value="{{$edit->roof}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

