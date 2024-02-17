<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Degree;
use App\Models\Main;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $jobs = Job::get();
        $degrees = Degree::get();
        $main = Main::where('switch_input', 0)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        return view('top', ['jobs' => $jobs, 'degrees' => $degrees, 'main' => $main]);
    }
    public function thank()
    {
        return view('thank');
    }
}
