<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function csv_upload(Request $request)
    {
        $file = $request->file;
        if (strtolower($file->getClientOriginalExtension()) == 'csv') {
            $filename = date('ymdhis') . '.'.$file->getClientOriginalExtension();
            $file_url = 'uploads/csv/'.$filename;
            $file->move('uploads/csv/', $filename);

            $csvfile = fopen($file_url, 'r');
            $header = fgetcsv($csvfile);
            $csvdata = '';
            while (($row = fgetcsv($csvfile)) !== false) {
                $csvdata .= implode(',', $row) . "\n";
            }
            fclose($csvfile);

            $data = [
                'status' => 200,
                'message' => 'Successfully upload and read',
                'csvdata' => $csvdata 
            ];
    
            return response()->json($data, 200);
        }
        else{
            return response()->json(['status' => 401, 'message' => 'Unsupported file'], 401);
        }
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $c_name = $request->c_name;
        $c_address = $request->c_address;
        $c_member = $request->c_member;
        $c_phone = $request->c_phone;
        $c_site = $request->c_site;
       

        if ($email == "" || $email == null) {
            return response()->json(['status' => 401, 'message' => 'メール入力'], 401);

        }
        
        else {
            $user = User::create([
                'email' => $email,
                'password' => $password,
                'c_name' => $c_name,
                'c_address' => $c_address,
                'c_member' => $c_member,
                'c_phone' => $c_phone,
                'c_site' => $c_site,
                'role' => 2
            ]);
    
            $data = [
                'status' => 200,
                'message' => '登録成功',
                'user' => $user // Include any additional data you want to send to the view
            ];
    
            return response()->json($data, 200);
        }
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
        $email = $request->email;
        $password = $request->password;
        $update_c_name = $request->update_c_name;
        $update_c_address = $request->update_c_address;
        $update_c_member = $request->update_c_member;
        $update_c_phone = $request->update_c_phone;
        $update_c_site = $request->update_c_site;
        $role = $request->role;
        
        $user = User::find($index);
        if($user) {
            $user->update([ 
                'email' => $email,
                'password' => $password,
                'c_name' => $update_c_name,
                'c_address' => $update_c_address,
                'c_member' => $update_c_member,
                'c_phone' => $update_c_phone,
                'c_site' => $update_c_site,
                'role' => $role
            ]);

            $data = [
                'status' => 200,
                'message' => '更新成功',
                'user' => $user // Include any additional data you want to send to the view
            ];
            return response()->json($data, 200);
        }else {
            return response()->json(['status' => 401, 'message' => '事業所が見つかりません。'], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $index = $request->index;
        $user = User::find($index);
        if($user) {
            $user->delete();
            $data = [ 
                'status' => 200,
                'message' => '削除成功',
                'user' => $user
            ];
            return response()->json($data, 200);

        }else {
            return response()->json(['status' => 401, 'message' => '事業所が見つかりません。'], 401);
        }
    }
}
