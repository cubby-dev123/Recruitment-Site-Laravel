<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Degree;
use App\Models\Main;
use Illuminate\Http\Request;

class BasicManageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::get();
        $degrees = Degree::get();
        $main = Main::get();
        return view('BasicManage.index', ['jobs' => $jobs, 'degrees' => $degrees, 'main' => $main]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function picture_upload(Request $request)
    {
        $file = $request->file;
        if (
            strtolower($file->getClientOriginalExtension()) == 'png'
            || strtolower($file->getClientOriginalExtension()) == 'jpg'
            || strtolower($file->getClientOriginalExtension()) == 'jpeg'
            || strtolower($file->getClientOriginalExtension()) == 'gif'
        ) {
            $filename = date('ymdhis') . '.' . $file->getClientOriginalExtension();
            $file_url = 'uploads/img/' . $filename;
            $file->move('uploads/img/', $filename);
            return ['file_url' => $file_url];
        } else {
            return 'unsupported image';
        }
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
    public function show(Request $request)
    {
        $index0 = $request->index0;
        $switch_input = $request->switch_input;
        $data = Main::find($index0);
        if ($data) {
            $data->update([
                'switch_input' => $switch_input,
            ]);
            return response()->json(['status' => 200, 'message' => '更新成功'], 200);

        } else {
            return response()->json(['status' => 401, 'message' => '事業所が見つかりません。'], 401);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $index = $request->index;
        $info = Main::find($index);
        if ($info) {
            $info->delete();
            $data = [
                'status' => 200,
                'message' => '削除成功',
                'user' => $info
            ];
            return response()->json($data, 200);
        } else {
            return response()->json(['status' => 401, 'message' => '事業所が見つかりません。'], 401);
        }
    }
}
