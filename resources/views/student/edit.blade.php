@extends('display.home')
@section('title')
    Edit Student
@endsection
@section('content')
    <form action="{{ route('students.update', $edit->id) }}" method="POST">
        @csrf
        <br />
        @method('PUT')
        <input type="hidden" name="id" value="{{$edit->id}}">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="student_name" value="{{$edit->student_name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">School</label>
            <select class="form-control" name="school_id" id="">
                <option value="{{$school_infor->id}}" selected=>
                    {{$school_infor->school_name}}
                </option>
                @foreach($school as $schools)
                    <option value="{{$schools->id}}"> {{$schools->school_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">danh muc Lop hoc</label>
            <select class="form-control" name="classroom_id" id="">
                <option value="{{$classroom_infor->id}}" selected=>{{$classroom_infor->classroom_name}}</option>
                @foreach($classroom as $classrooms)
                    <option value="{{$classrooms->id}}"> {{$classrooms->classroom_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">danh muc giao vien</label>
            <select class="form-control" name="mentor_id" id="">
                <option value="{{$mentor_infor->id}}" selected=>{{$mentor_infor->mentor_name}}</option>
                @foreach($mentor as $mentors)
                    <option value="{{$mentors->id}}"> {{$mentors->mentor_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text"  class="form-control" name="phone" value="{{$edit->phone}}">
        </div>
        <div class="mb-3">
            <label class="form-label">description</label>
            <input type="text"  class="form-control" name="description" value="{{$edit->description}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
