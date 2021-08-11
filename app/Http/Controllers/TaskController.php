<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Log;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deadline = Carbon::now()->format('Y-m-d');
        $tasks = Task::orderBy('id','DESC')->simplepaginate(10);
        return view('Tasks.index',compact('tasks', 'deadline'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('name','ASC')->get(['id','name']);
        return view('Tasks.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'user' => 'required',
            'description' => 'required',
            'title' => 'required',
            'deadTime' => 'required',
        ];
        $this->validate($request, $rules);
        Task::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'user' => $request['user'],
            'deadTime' => $request['deadTime'],
            'creator' => auth()->user()->email,
        ]);

        $notification = 'Task added successfully';
        return redirect()->route('tasks.index')->with(compact('notification'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        try {
            $logs = Log::where('tasks_id',$task->id)->orderBy('id','DESC')->get();
            return view('Tasks.show',compact('task', 'logs'));
        } catch (\Throwable $th) {
            return view('Tasks.show',compact('task'));
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
