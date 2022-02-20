<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class Todocontroller extends Controller
{
    public function index()
    {
        $todos = Todo::orderBy('created_at', 'asc')->get();
        return view('index', ['todos' => $todos]);
    }
    public function add(Request $request)
    {
        $this->validate($request, Todo::$rules);
        Todo::create([
            'content' => $request->content
        ]);
        return redirect()->route('todo.index');
    }
    public function delete(Request $request)
    {
        $todo = Todo::find($request->id)->delete();
        return redirect()->route('todo.index');
    }


    
}
