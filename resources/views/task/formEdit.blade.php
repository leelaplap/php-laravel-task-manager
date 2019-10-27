@extends('home')
@section('content')
    <form method="post" action="{{route('tasks.update',$tasks->id)}}">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{$tasks->name}}">
        </div>
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" name="email" value="{{$tasks->email}}" >
        </div>
        <div class="form-group">
            <label>image</label>
            <input type="file" name="image" class="form-control" value="{{$tasks->image}}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
