<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index() {
        return view('newtodo');
    }

    public function newtodo(Request $request) {
        $todo = new Todo();
        $todo->title = $request->get('title');
        $todo->description = $request->get('description', '');
        $todo->user_id = \Auth::id();
        $todo->save();
        return redirect('/todos');
    }

    public function todos() {
        $todos = \Auth::user()->todos;
        return view('todos', ['todos' => $todos]);
    }

    public function todo(Request $request) {
        $todo = Todo::find($request->get('id'));
        return view('todo', ['todo' => $todo]);
    }

    public function toggle(Request $request) {
        $todo = Todo::find($request->get('id'));
        $todo->done = !$todo->done;
        $todo->save();
        return redirect('/todos');

    }

    public function showTodo(Request $request) {
        $todo = Todo::find($request->get('id'));
        return view('edit', ['todo' => $todo]);
    }

    public function update(Request $request) {
        $todo = Todo::find($request->get('id'));
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();
        return redirect('/todos');
    }

    public function delTodo(Request $request) {
        $todo = Todo::find($request->get('id'));
        $todo->delete();
        return redirect('/todos');
    }
}
