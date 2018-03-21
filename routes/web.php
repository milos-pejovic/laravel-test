<?php

//use App\Task;

//Route::get('/', function() {

//    return view('welcome', [
//        'name' => 'World'
//    ]);
//
//    //===========================================================================
//
//    return view('welcome')->with('name', 'World');
//
//    //===========================================================================
//
//    $name = 'Jeffrey';
//    $age = 31;
//     "compact" makes an array with the passed strings as keys and their values from the variables up
//    return view('welcome', compact('name', 'age'));
//
//     //===========================================================================
//
//    $tasks = [
//        'Go to the store',
//        'Finish my screencast',
//        'Clean the house'
//    ];
//
//    return view('welcome', compact('tasks'));

//    $tasks = DB::table('tasks')->latest()->get();
//    return view('welcome', compact('tasks'));

//});

//=========================================================================================

//Route::get('/tasks', function() {
//    $tasks = App\Task::all();
//    return view('tasks.index', compact('tasks'));
//});
//
//Route::get('/tasks/{taskId}', function($taskId) {
//    $task = DB::table('tasks')->find($taskId);
//    $task = Task::find($taskId);
//    return view('tasks.show', compact('task'));
//});

//=========================================================================================

//Route::get('/tasks', 'TasksController@index');
//Route::get('/tasks/{id}', 'TasksController@show');
//Route::get('/tasks/{task}', 'TasksController@show');

//=========================================================================================

// Root

Route::get('/', 'PostsController@index');

// Posts

Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');

// Planes

Route::get('/planes', 'PlanesController@index');
Route::get('/planes/create', 'PlanesController@create');
Route::get('/planes/{plane}', 'PlanesController@show');
Route::post('/planes', 'PlanesController@store');
