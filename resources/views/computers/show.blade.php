@extends('layout')

@section('title', 'Computers')

@section('content')

<h1>Computers</h1>
<p>This is the Computers page</p>
<h3>{{ $computer['name'] }} is from <strong>{{ $computer['origin']}} - <strong>{{$computer['price']}}</strong></strong></h3>
@endsection