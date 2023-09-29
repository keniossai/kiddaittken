<?php

namespace App\Http\Controllers\API;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function all_task()
    {
        $tasks = Task::all();
        return response()->json(['data' => $tasks], 200);
    }

    public function tasksForUser()
    {
        $user = Auth::user();
        $tasks = Task::where('user_id', $user->id)->get();
        return response()->json(['tasks' => $tasks]);
    }
}
