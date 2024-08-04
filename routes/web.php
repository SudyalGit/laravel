<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::resource('/jobs', JobController::class);



















// Route::resource('/jobs', JobController::class, [
//     // 'only' => ['index', 'show'],
//     'except' => ['create', 'edit'],
// ]);


// Route::get('/', function () {
//     return view('home');
// });

// Route::view('/', 'home');





// index

// Route::get('/jobs', function () {
//     // return view('jobs', ['jobs' => Job::all()]);
//     // return view('jobs.index', ['jobs' => Job::with('employer')->get()]);
//     return view('jobs.index', ['jobs' => Job::with('employer')->latest()->get()]);
// });

// Route::get('/jobs', [JobController::class, 'index']);





// create

// Route::get('/jobs/create', function () {
//     return view('jobs.create');
// });

// Route::get('/jobs/create', [JobController::class, 'create']);





// show

// Route::get('/jobs/{job}', function (Job $job) {
//     return view('jobs.show', ['job' => $job]);
// });

// Route::get('/posts/{post:id}', function ($id) {
//     return view('posts.show', ['id' => $id]);
// });

// Route::get('/jobs/{id}', function ($id) {
//     return view('jobs.show', ['job' => Job::find($id)]);
// });
// Route::get('/jobs/{job}', [JobController::class, 'show']);






// store

// Route::post('/jobs', function () {
//     request()->validate([
//         'title' => ['required', 'min:3'],
//         'salary' => ['required', 'numeric'],
//     ]);

//     Job::create([
//         'title' => request('title'),
//         'salary' => request('salary'),
//         'employer_id' => 1
//     ]);
//     return redirect('/jobs');
// });

// Route::post('/jobs', [JobController::class, 'store']);








// edit

// Route::get('/jobs/{job}/edit', function (Job $job) {
//     return view('jobs.edit', ['job' => $job]);
// });

// Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);






// update


// Route::patch('/jobs/{job}', function (Job $job) {
//     request()->validate([
//         'title' => ['required', 'min:3'],
//         'salary' => ['required', 'numeric'],
//     ]);

//     // $job->title = request('title');
//     // $job->salary = request('salary');
//     // $job->save();
//     $job->update([
//         'title' => request('title'),
//         'salary' => request('salary'),
//     ]);
//     return redirect("/jobs/{$job->id}");

// });

// Route::patch('/jobs/{job}', [JobController::class, 'update']);







// delete

// Route::delete('/jobs/{job}', function (Job $job) {
//     $job->delete();
//     return redirect('/jobs');
// });

// Route::delete('/jobs/{job}', [JobController::class, 'destroy']);