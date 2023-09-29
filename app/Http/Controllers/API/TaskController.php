<?php

namespace App\Http\Controllers\API;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function all_task()
    {
        $tasks = Task::all();
        return response()->json(['data' => $tasks], 200);
    }
}
