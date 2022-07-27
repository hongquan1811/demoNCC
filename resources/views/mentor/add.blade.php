@extends('display.home')
@section('content')
    <form action="{{ route('mentors.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="mentor_name">
        </div>
        <div class="mb-3">
            <label  class="form-label">Experience</label>
            <input type="text" name="experience"  class="form-control">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

