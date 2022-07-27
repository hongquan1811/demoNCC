@extends('display.home')
@section('title')
    Edit Mentor
@endsection
@section('content')
    <form action="{{ route('mentors.update', $edit->id) }}" method="POST">
        @csrf
        <br />
        @method('PUT')
        <input type="hidden" name="id" value="{{$edit->id}}">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="mentor_name" value="{{$edit->mentor_name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Experience</label>
            <input type="text" name="experience"  class="form-control" value="{{$edit->experience}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
