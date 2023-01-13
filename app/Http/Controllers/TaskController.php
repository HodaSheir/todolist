<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Carbon\Carbon;

class TaskController extends Controller
{
    //
    public function index(){
        $completedTasks = Task::where('done',1)->get();
        $notCompletedTasks = Task::where('done',0)->get();
        return view('welcome',compact('completedTasks','notCompletedTasks'));
    }

    public function addTask(Request $request){
        $input = $request->all();
        $due_date = Carbon::parse($input['due_date']);
        $input['due_date'] = $due_date;
        $task = Task::create($input);
        return $task->id;
    }

    public function completeTask(Request $request){
        $input = $request->all();
        $task = Task::findOrFail($input['task_id']);
        $task['done'] = 1;
        $task['completed_at'] = now()->format('Y-m-d H:i:s');
        $task->update();
    }

    public function deleteTask($id){
        $task = Task::findOrFail($id);
        $task->delete();
    }

    public function returnTask(Request $request){
        $input = $request->all();
        $task = Task::findOrFail($input['task_id']);
        $task['done'] = 0;
        $task['completed_at'] = null;
        $task->update();
    }

    public function getTask($id){
        $task = Task::findOrFail($id);
        return $task;
    }

    public function updateTask(Request $request){
        $input   = $request->all();
        $task_id = $input['task_id'];
        $task    = Task::findOrFail($task_id);
        $due_date = Carbon::parse($input['due_date']);
        $input['due_date'] = $due_date;
        $task->update($input);
    }
}
