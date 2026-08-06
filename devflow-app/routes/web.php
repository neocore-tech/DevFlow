<?php

use Illuminate\Support\Facades\Route;

use App\Models\Project;
use App\Models\Task;
use App\Models\Sprint;
use App\Models\User;

Route::get('/', function () {
    $stats = [
        'projects' => Project::count(),
        'sprints' => Sprint::count(),
        'tasks' => Task::count(),
        'users' => User::count(),
    ];
    return view('dashboard', compact('stats'));
});
