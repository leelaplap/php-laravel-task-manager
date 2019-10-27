@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Danh sách khách hàng</h1>
<table border="1">
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Email</th>
        <th>Ảnh</th>
        <th colspan="3" style="text-align: center"><a href="{{route('tasks.formAdd')}}">Add</a></th>
    </tr>
    @foreach($tasks as $key =>$task)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$task->name}}</td>
            <td>{{$task->email}}</td>
            <td>{{$task->image}}</td>
            <td>
                <a href="#">Xem</a> |
                <a href="{{route('tasks.formEdit',$task->id)}}}" onclick="return confirm('Are you sure ??? ')">Sửa</a> |
                <a href="{{route('tasks.destroy',$task->id)}}" onclick="return confirm('Are you sure ??? ')">Xóa</a>
            </td>
        </tr>
    @endforeach
</table>
</body>
{{$tasks->links()}}
</html>


@endsection
