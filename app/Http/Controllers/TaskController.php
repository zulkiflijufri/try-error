<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('layouts.tasks', ['tasks' => Task::all()]);
    }

    public function create()
    {
        return view('layouts.create-edit');
    }

    public function store()
    {
        Task::create([
            'task' => request('task'),
            'desc' => request('desc')
        ]);

        return redirect('/');
    }
}
