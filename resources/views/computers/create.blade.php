@extends('layout')

@section('title', 'Computers')

@section('content')

<h1>Create new computer</h1>

<div>
    <form action="{{route('computers.store')}}" method="post" class="form bg-gray-100 p-6 border-2">
        @csrf
        <div class="flex flex-col">
            <label for="computer-name" class="text-sm text-left">Computer Name</label>
            <input type="text" class="text-lg border-2" id="computer-name" name="computer-name">
        </div>
        <div class="flex flex-col">
            <label for="computer-origin" class="text-sm text-left">Computer Origin</label>
            <input type="text" class="text-lg border-2" id="computer-origin" name="computer-origin">
        </div>
        <div class="flex flex-col">
            <label for="computer-price" class="text-sm text-left">Computer Price</label>
            <input type="text" class="text-lg border-2" id="computer-price" name="computer-price">
        </div>
        <div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Submit</button>
        </div>
    </form>
</div>

@endsection