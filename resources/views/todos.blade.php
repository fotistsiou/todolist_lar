@extends('layouts.layout')

@section('content')

    <div class="container">

            <h1 class="text-center">Todo List:</h1>

            <div class="text-dark rounded p-3 mt-2 bg-light">
                @foreach ($todos as $todo)
                    @if ($todo->done)
                        <li>
                            <del><a href="{{ route('todo') }}?id={{ $todo->id }}">{{ $todo->title }}</a></del>
                            <strong><a href="{{ route('toggle') }}?id={{ $todo->id }}" class="text-secondary border-left border-secondary pl-1">UnDone</a></strong>
                            <strong><a href="{{ route('delTodo') }}?id={{ $todo->id }}" class="text-danger border-left border-secondary pl-1">Delete</a></strong>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('todo') }}?id={{ $todo->id }}">{{ $todo->title }}</a>
                            <strong><a href="{{ route('toggle') }}?id={{ $todo->id }}" class="text-secondary border-left border-secondary pl-1 ">Done</a></strong>
                            <strong><a href="{{ route('edit') }}?id={{ $todo->id }}" class="text-info border-left border-secondary pl-1">Edit</a></strong>
                        </li>
                    @endif
                @endforeach
            </div>

            <a href="{{ route('newtodo') }}" class="btn btn-primary mt-2">New Todo</a>

    </div>

@endsection
