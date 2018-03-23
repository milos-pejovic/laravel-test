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

Route::get('/', 'PostsController@index')->name('home');

// Posts

Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');

Route::post('/posts/{post}/comments', 'CommentsController@store');

// Planes

Route::get('/planes', 'PlanesController@index');
Route::get('/planes/create', 'PlanesController@create');
Route::get('/planes/{plane}', 'PlanesController@show');
Route::post('/planes', 'PlanesController@store');

//Authors

Route::get('/authors', 'AuthorsController@index');
Route::get('/authors/create', 'AuthorsController@create');
Route::get('/authors/{author}', 'AuthorsController@show');
Route::post('/authors', 'AuthorsController@store');
Route::post('/authors/{author}/book', 'BooksController@store');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::post('/logout', 'SessionsController@destroy');
