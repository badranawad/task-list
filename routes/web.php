<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function(){
    $name = 'Badran Mohammed';
    $age = 50;



    // return view('about')->with('name', $name)->with('age', $age);
    return view('about', compact('name'));
});

Route::post('send', function(Request $request){
    $name = $request->myname;
    return view('about',compact('name'));
});

Route::get('tasks', function(){
    $tasks = [
        '1' => 'Task 1',
        '2' => 'Task 2',
        '3' => 'Task 3'
    ];
    // dd($tasks[1]);
    return view('tasks', compact('tasks'));
});

Route::get('task/show/{id}', function($id){
    $tasks = [
        '1' => 'Task 1',
        '2' => 'Task 2',
        '3' => 'Task 3'
    ];
    $task = $tasks[$id];
    // dd($task);
    return view('show', compact('task'));
});
