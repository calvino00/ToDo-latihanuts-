@extends('base')

@section('body')
<button > <a href="{{ route('todoNewForm') }}">Add</a> </button>
<button > <a href="{{ route('todoShow')}}">Show Finish</a> </button>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Description</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    @foreach ($todos as $todo)
    <tr>
        <td>{{$todo->id}}</td>
        <td>{{$todo->description}}</td>
        <td><?php if($todo->status == 0) echo"unfinish";
        else if($todo->status == 1) echo"finished"; ?>
        </td>
        <td><a href="{{ route('todoDelete',['id' => $todo->id]) }}"onclick="return confirm('Are you sure?')">Delete</a> 
            <a href="{{ route('todoUpdate',['id' => $todo->id]) }}">Edit</a></td>

    
    </tr>
    @endforeach
</table>
@endsection