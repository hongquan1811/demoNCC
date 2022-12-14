@extends('display.home')
@section('title')
    List Mentor
@endsection
@section('content')
    <table class="table" id="table_id">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Experience</th>
            <th scope="col">Option</th>
        </tr>
        </thead>
        <tbody>
        <div>
            <a href="{{route('mentors.create')}}">
                <button type="button" class="btn btn-primary">Thêm mới</button>
            </a>
        </div>
        @php
            $i=1;
        @endphp
        @foreach($index as $mentor)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$mentor->mentor_name}}</td>
                <td>{{$mentor->experience}}</td>
                <td>
                    <form action="{{route('mentors.show', $mentor->id)}}" method="get" style="display: inline-block">
                        <button type="submit" class="btn btn-primary">View</button>
                    </form>
                    <form action="{{route('mentors.edit', $mentor->id)}}" method="get" style="display: inline-block">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                    <form action="{{route('mentors.destroy', $mentor->id)}}" method="post" onclick="myFunction()" style="display: inline-block">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <script>
        function myFunction() {
            if (!confirm("Are You Sure to delete this"))
                event.preventDefault();
        }
    </script>

@endsection

