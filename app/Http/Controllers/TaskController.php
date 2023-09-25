<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $tasks = Task::where('user_id', $user->id)->orderBy('id', 'desc')->get();
        return view('tasks.index', compact('user','tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validation->fails()) {
            return redirect()->back()->with('error','All fields are required');;
        } else {
            $tasks = new Task();

            $tasks->title = $request->title;
            $tasks->description = $request->description;
            $tasks->user_id = $request->user_id;
            $tasks->completed = 0;
            $result = $tasks->save();
            if ($result) {
                return redirect()->back()->with('success','Task added successfully');
            } else {
                return redirect()->back()->with('error','Task added successfully');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
