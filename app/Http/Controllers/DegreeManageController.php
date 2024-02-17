<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use Illuminate\Http\Request;

class DegreeManageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $degrees = Degree::get();
        return view('DegreeManage.index', ['degrees' => $degrees]);
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
        $new_degree = $request->new_degree;

        if ($new_degree == "" || $new_degree == null) {
            return response()->json(['status' => 401, 'message' => '資格入力'], 401);
        }

        $degree = Degree::create([
            'degree' => $new_degree,
        ]);

        $data = [
            'status' => 200,
            'message' => '登録成功',
            'degree' => $degree // Include any additional data you want to send to the view
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
        $update_degree = $request->update_degree;

        $degree = Degree::find($index);
        if ($degree) {
            $degree->update([
                'degree' => $update_degree,
            ]);

            $data = [
                'status' => 200,
                'message' => '更新成功',
                'user' => $degree // Include any additional data you want to send to the view
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
        $degree = Degree::find($index);
        if ($degree) {
            $degree->delete();
            $data = [
                'status' => 200,
                'message' => '削除成功',
                'user' => $degree
            ];
            return response()->json($data, 200);
        } else {
            return response()->json(['status' => 401, 'message' => 'Not found user'], 401);
        }
    }
}
