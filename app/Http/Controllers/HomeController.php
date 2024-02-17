<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Main;
use App\Models\Degree;
use App\Models\Job;
use App\Models\Extend_verify_token;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $token = $request->token;
        // dd($token);
        if ($token) {
            $data0 = Extend_verify_token::query()
                ->when($token, function ($query) use ($token) {
                    return $query->where('token', $token);
                })
                ->first();
            if ($data0) {
                $jobs = Job::get();
                $degrees = Degree::get();
                $email = $data0->email;
                $c_info = User::query()
                    ->when($email, function ($query) use ($email) {
                        return $query->where('email', $email);
                    })
                    ->first();
                $c_name = $c_info->c_name;
                $data = Main::query()
                    ->when($c_name, function ($query) use ($c_name) {
                        return $query->where('c_name', $c_name);
                    })
                    ->get();
                if ($data->isNotEmpty()) {
                    return view('MainInfo.index', ['data' => $data, 'c_info' => $c_info, 'token' => $token, 'jobs' => $jobs, 'degrees' => $degrees]);
                } else {
                    return view('MainInfo.index', ['data' => null, 'c_info' => $c_info, 'jobs' => $jobs, 'degrees' => $degrees]);
                }
            } else {
                // Handle invalid token
                return response()->view('errors.invalid_token', [], 400);
            }
        } else {
            $login_user = Auth::user();
            if ($login_user->role == 2) {
                $c_name = $login_user->c_name;
                $jobs = Job::get();
                $degrees = Degree::get();

                $data = Main::query()
                    ->when($c_name, function ($query) use ($c_name) {
                        return $query->where('c_name', $c_name);
                    })
                    ->get();

                $c_info = User::query()
                    ->when($c_name, function ($query) use ($c_name) {
                        return $query->where('c_name', $c_name);
                    })
                    ->first();

                if ($data->isNotEmpty()) {
                    return view('MainInfo.index', ['data' => $data, 'c_info' => $c_info, 'token' => $token, 'jobs' => $jobs, 'degrees' => $degrees]);
                } else {
                    return view('MainInfo.index', ['data' => null, 'c_info' => $c_info, 'jobs' => $jobs, 'degrees' => $degrees]);
                }

            } else {
                $users = User::get();
                return view('home', ['users' => $users]);
            }

        }
    }
}
