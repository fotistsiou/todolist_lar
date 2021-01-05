<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Todo list' }}</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="bg-info">
    
    <nav>
        @if (Auth::check())
        <div class="float-right m-2 p-2">
            {{ Auth::user()->name }}
            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-danger">Logout</button> 
            </form>
        </div>
        @endif
    </nav>
    
    @yield('content')
    
  </body>
  </html>