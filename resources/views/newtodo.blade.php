@extends('layouts.layout')

@section('content')

    <div class="container">

        <h1 class="text-center">New Todo:</h1>
                
        <form action="/newtodo" method="POST">
            @csrf
            <input type="text" name="title" class="form-control" placeholder="title">
            <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="description"></textarea>
            <button class="btn btn-primary mt-2">Submit</button>
            <a href="{{ route('todos') }}" class="btn btn-secondary mt-2">Todo list</a>
        </form>
      
    </div>
    
@endsection