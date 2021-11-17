<?php

namespace App\Http\Controllers;

use App\Models\projects;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function showDashboard()
    {
         $project['pro'] = projects::orderBy('id', 'DESC')->limit(5)->get();
         $projectCount = projects::all();
         return view('dashboard')->with($project)->with(compact('projectCount'));
    }

    public function portfolio()
    {
      return view('098098');
    }

}
