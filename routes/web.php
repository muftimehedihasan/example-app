<?php
use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
 $jobs = Job::all();
 dd($jobs[0]);
});

Route::get('/jobs', function () {

    $jobs = Job::with('employer')->simplePaginate(3);

    return view('jobs', [
    'jobs' => $jobs,
    ]);
});

Route::get('/jobs/{id}', function ($id) {
$job = Job::find($id);

        return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});




// Route::get('/', 'home');

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/craete','create');
//     Route::get('/jobs/{job}','show');
//     Route::get('/jobs','store');
//     Route::get('/jobs/{job}/edit','edit');
//     Route::get('/jobs{job}','update');
//     Route::get('/jobs/{job}','destroy');
// });


// Route::view('/contact','contact');
