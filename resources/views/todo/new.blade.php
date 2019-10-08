@extends('base')

@section('body')
    <form action="{{ route('todoCreate') }}" method="post">
        @csrf
        <div>
            <label>Description </label>
            <input type="text" name="description">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
@endsection