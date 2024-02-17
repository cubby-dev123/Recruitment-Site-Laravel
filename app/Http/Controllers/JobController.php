<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Degree;
use App\Models\Main;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $province = $request->province;
        $city = $request->city;
        $degree = $request->degree;
        $job = $request->job;

        $data = Main::query();

        if ($province) {
            $data->where('c_address', 'like', "%$province%");
        }

        if ($city) {
            $data->Where('c_address', 'like', "%$city%");
        }

        if ($degree) {
            $data->Where('degree', 'like', "%$degree%");
        }

        if ($job) {
            $data->Where('job_type', 'like', "%$job%");
        }

        if ($province && $job) {
            $data->where('c_address', 'like', "%$province%")->where('job_type', 'like', "%$job%");
        }
        if ($province && $degree) {
            $data->where('c_address', 'like', "%$province%")->where('degree', 'like', "%$degree%");
        }
        if ($province && $job && $degree) {
            $data->where('c_address', 'like', "%$province%")->where('job_type', 'like', "%$job%")->where('degree', 'like', "%$degree%");
        }
        if ($city && $job) {
            $data->where('c_address', 'like', "%$city%")->where('job_type', 'like', "%$job%");
        }
        if ($city && $degree) {
            $data->where('c_address', 'like', "%$city%")->where('degree', 'like', "%$degree%");
        }
        if ($city && $job && $degree) {
            $data->where('c_address', 'like', "%$city%")->where('job_type', 'like', "%$job%")->where('degree', 'like', "%$degree%");
        }



        $data = $data->orderByDesc('created_at')->get();

        $all_job = Job::get();
        $all_degree = Degree::get();

        return view('Job.index', [
            'data' => $data,
            'province' => $province,
            'city' => $city,
            'job' => $job,
            'degree' => $degree,
            'all_job' => $all_job,
            'all_degree' => $all_degree
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
