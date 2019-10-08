@extends('base')

@section('body')
    <form action="{{ route('todoUpdate',['id'=>$todo->id]) }}" method="post">
        @csrf
        <div>
            <label>Description : </label>
            <input type="text" name="description" value="{{$todo->description}}">
        </div>
        <div>
            <label>Status : </label>
            <input type="checkbox" name="status" <?php if ($todo->status) echo "Finished";?> >Check = Finished, Uncheck = Unfinish 
            
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
@endsection