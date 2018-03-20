<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    /**
     * ======================================================================================================
     *  index
     * ======================================================================================================
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * ======================================================================================================
     *  show
     * ======================================================================================================
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
//    public function show($id) {
//        $task = Task::find($id);
//        return view('tasks.show', compact('task'));
//    }

    /**
     * ======================================================================================================
     *  show
     * ======================================================================================================
     * @param $taskId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Task $task) {
        return view('tasks.show', compact('task'));
    }

}
