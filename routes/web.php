<?php
use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
 $jobs = Job::all();
 dd($jobs[0]);
});

Route::get('/jobs', function () {

    $jobs = Job::with('employer')->paginate(3);

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


