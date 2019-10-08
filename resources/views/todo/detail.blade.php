@extends('base')

@section('body')
<dl>
    <dt>Nama</dt>
    <dd>{{$komentar->nama}}</dd>
    <dt>Komentar</dt>
    <dd>{{$komentar->komentar}}</dd>

</dl>
@endsection