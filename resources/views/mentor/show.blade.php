
@extends('display.home')
@section('title')
    List Mentor
@endsection
@section('content')
    <form action="{{ route('mentors.show', $show->id) }}" method="POST">
        @csrf
        <br />
        @method('PUT')
        <input type="hidden" name="id" value="{{$show->id}}">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="mentor_name" value="{{$show->mentor_name}}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Experience</label>
            <input type="text" name="experience"  class="form-control" value="{{$show->experience}}" readonly>
        </div>
{{--        <button type="submit" class="btn btn-primary">Submit</button>--}}
    </form>
@endsection
