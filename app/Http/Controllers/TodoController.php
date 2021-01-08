<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    /**
     * if user logged in list todos related to that user
     * else list all todos available .
     */
    public function index()
    {
        if (auth()->check()) {
            $todos = auth()
                ->user()
                ->todos()
                ->orderBy('completed')
                ->get();

            return view('todos.index', compact('todos'));
        }
        $todos = Todo::orderBy('completed')->get();
        return view('todos.index', compact('todos'));
    }
    /**
     * view todo information.
     */
    public function show(Todo $todo)
    {

        return view('todos.show', compact('todo'));
    }
    /**
     * create new todo associated with logged user
     */
    public function create()
    {
        $todos = auth()->user()->todos()->orderBy('completed')->get();
        return view('todos.create', compact('todos'));
    }
    /**
     * store todo to database
     */
    public function store(Request $request)
    {

        if ($request->title) {
            $validated = $request->validate([
                'title' => 'required|max:254|min:5',
                'body'  => 'required|min:10|max:500',
            ]);
            $todo = auth()->user()->todos()->create($validated);
            dd($todo);
            return redirect()->back()->with('msg', 'task added successfully');
        }

        return redirect()->back()->with('error', 'somthing went wrong');
    }
    /**
     * edit todo page redirection with route model binding
     */
    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }
    /**
     * Update todo after validation request data
     */
    public function update(Request $request, Todo $todo)
    {

        if ($request->title) {
            $validated = $request->validate([
                'title' => 'required|max:254|min:5',
                'body' => 'required|min:10|max:500',
            ]);
            $validated['completed'] = false;

            $todo->update($validated);
            return redirect('todos/')->with('msg', 'task updated successfully');
        }
    }
    /**
     * delete todo
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->back()->with('msg', 'task deleted successfully');
    }
    /**
     * check wheather task is complete or not.
     * if completed make it uncomplete.
     * if uncompleted make it complete.
     * redirect back with msg
     */
    public function complete(Todo $todo)
    {


        if (!$todo->completed) {
            $todo->update(['completed' => true]);
            return redirect('todos/')->with('msg', 'task marked completed successfully');
        } else {
            $todo->update(['completed' => false]);
            return redirect('todos/')->with('msg', 'task maked incompleted successfully');
        }
    }
}
