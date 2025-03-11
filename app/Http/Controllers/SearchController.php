<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(){

        $jobs = Job::with(['employer', 'tags'])
        ->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('location', 'like', '%' . request('search') . '%')
            ->get();

        return view('components.job.show', [
            'jobs' => $jobs,
        ]);
    }
}
