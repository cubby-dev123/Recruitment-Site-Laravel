<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobManageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::get();
        return view('JobManage.index', ['jobs' => $jobs]);
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
        $new_job = $request->new_job;

        if ($new_job == "" || $new_job == null) {
            return response()->json(['status' => 401, 'message' => '職種入力'], 401);
        }

        $job = Job::create([
            'job_type' => $new_job,
        ]);

        $data = [
            'status' => 200,
            'message' => '登録成功',
            'job' => $job // Include any additional data you want to send to the view
        ];

        return response()->json($data, 200);
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
    public function update(Request $request)
    {
        $index = $request->index;
        $update_job = $request->update_job;

        $job = Job::find($index);
        if ($job) {
            $job->update([
                'job_type' => $update_job,
            ]);

            $data = [
                'status' => 200,
                'message' => '更新成功',
                'job' => $job // Include any additional data you want to send to the view
            ];
            return response()->json($data, 200);
        } else {
            return response()->json(['status' => 401, 'message' => 'Not found user'], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $index = $request->index;
        $job = Job::find($index);
        if ($job) {
            $job->delete();
            $data = [
                'status' => 200,
                'message' => '削除成功',
                'job' => $job
            ];
            return response()->json($data, 200);
        } else {
            return response()->json(['status' => 401, 'message' => 'Not found user'], 401);
        }
    }
}
