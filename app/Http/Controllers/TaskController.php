<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected $task;

    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    public function index()
    {
        $tasks = $this->task->paginate(5);
        return view('task.index', compact('tasks'));
    }


    public function create()
    {
        return view('task.formAdd');
    }


    public function store(Request $request)
    {
        $task = new Task();
        $task->name = $request->name;
        $task->email = $request->email;
        $task->image = $request->image;
        $task->save();

        return redirect()->route('tasks.list');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $tasks= $this->task->findOrFail($id);
        return view('task.formEdit', compact('tasks'));
    }


    public function update(Request $request, $id)
    {
        $tasks= $this->task->findOrFail($id);
        $tasks->name = $request->name;
        $tasks->email = $request->email;
        $tasks->image = $request->image;
        $tasks->save();

        return redirect()->route('tasks.list');

    }


    public function destroy($id)
    {
       $task= $this->task->findOrFail($id);
        $task->delete();
        return redirect()->route('tasks.list');
    }
}
