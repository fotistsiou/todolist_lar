@extends('layouts.layout')

@section('content')

    <div class="container">

        <h1 class="text-center">Edit your todo:</h1>

        <form action="/edited" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $todo->id }}">
            <input type="text" name="title" class="form-control" value="{{ $todo->title }}">
            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $todo->description }}</textarea>
            <button class="btn btn-primary mt-2">Submit</button>
        </form>

    </div>

@endsection