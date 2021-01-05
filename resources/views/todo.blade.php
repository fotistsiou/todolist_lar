@extends('layouts.layout')

@section('content')

    <div class="container">

        <h1 class="text-center">{{ $todo->title }}:</h1>

        <div class="text-dark rounded p-3 bg-light">{{ $todo->description }}</div>

        <a href="{{ route('todos') }}" class="btn btn-secondary mt-2">Todo list</a>
    
    </div>

@endsection
