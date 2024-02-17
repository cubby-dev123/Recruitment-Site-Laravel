<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Degree;
use App\Models\Job;
use App\Models\Main;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class MainInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $c_name = $request->c_name;
        $jobs = Job::get();
        $degrees = Degree::get();

        $c_info = User::query()
            ->when($c_name, function ($query) use ($c_name) {
                return $query->where('c_name', $c_name);
            })
            ->first();

        if ($c_name) {
            $data = Main::query()
                ->when($c_name, function ($query) use ($c_name) {
                    return $query->where('c_name', $c_name);
                })
                ->get();

            if ($data->isNotEmpty()) {
                return view('MainInfo.index', ['data' => $data, 'c_info' => $c_info, 'jobs' => $jobs, 'degrees' => $degrees]);
            }

            return view('MainInfo.index', ['data' => null, 'c_info' => $c_info, 'jobs' => $jobs, 'degrees' => $degrees]);
        }

        return view('MainInfo.index', ['data' => null, 'c_info' => $c_info, 'jobs' => $jobs, 'degrees' => $degrees]);
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
        $c_name = $request->c_name;
        $c_address = $request->c_address;
        $c_member = $request->c_member;
        $c_member_email = $request->c_member_email;
        $c_phone = $request->c_phone;
        $c_site = $request->c_site;
        $job_type = $request->job_type;
        $em_type = $request->em_type;
        $em_num = $request->em_num;
        $work_time = $request->work_time;
        $rest_time = $request->rest_time;
        $pay_amount = $request->pay_amount;
        $rest_day = $request->rest_day;
        $insurance = $request->insurance;
        $commuting_allowance = $request->commuting_allowance;
        $academic_history = $request->academic_history;
        $degree = $request->degree;
        $other = $request->other;
        $t_message = $request->t_message;
        $c_message = $request->c_message;
        $img_1 = $request->img_1;
        $img_2 = $request->img_2;
        $img_3 = $request->img_3;
        $img_4 = $request->img_4;
        $img_5 = $request->img_5;
        $img_6 = $request->img_6;
        $img_7 = $request->img_7;
        $img_8 = $request->img_8;
        $img_9 = $request->img_9;
        $img_10 = $request->img_10;
        $enter_date = Carbon::now()->format('Y-m-d');
        $info = Main::create([
            'c_name' => $c_name,
            'c_address' => $c_address,
            'c_member' => $c_member,
            'c_member_email' => $c_member_email,
            'c_phone' => $c_phone,
            'c_site' => $c_site,
            'job_type' => $job_type,
            'em_type' => $em_type,
            'em_num' => $em_num,
            'work_time' => $work_time,
            'rest_time' => $rest_time,
            'pay_amount' => $pay_amount,
            'rest_day' => $rest_day,
            'insurance' => $insurance,
            'commuting_allowance' => $commuting_allowance,
            'academic_history' => $academic_history,
            'degree' => $degree,
            'other' => $other,
            't_message' => $t_message,
            'c_message' => $c_message,
            'img_1' => $img_1,
            'img_2' => $img_2,
            'img_3' => $img_3,
            'img_4' => $img_4,
            'img_5' => $img_5,
            'img_6' => $img_6,
            'img_7' => $img_7,
            'img_8' => $img_8,
            'img_9' => $img_9,
            'img_10' => $img_10,
            'switch_input' => 0,
            'enter_date' => $enter_date
        ]);

        $data = [
            'status' => 200,
            'message' => '登録成功',
            'info' => $info // Include any additional data you want to send to the view
        ];

        return response()->json($data, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
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
        $c_name = $request->c_name;
        $c_address = $request->c_address;
        $c_member = $request->c_member;
        $c_member_email = $request->c_member_email;
        $c_phone = $request->c_phone;
        $c_site = $request->c_site;
        $job_type = $request->job_type;
        $em_type = $request->em_type;
        $em_num = $request->em_num;
        $work_time = $request->work_time;
        $rest_time = $request->rest_time;
        $pay_amount = $request->pay_amount;
        $rest_day = $request->rest_day;
        $insurance = $request->insurance;
        $commuting_allowance = $request->commuting_allowance;
        $academic_history = $request->academic_history;
        $degree = $request->degree;
        $other = $request->other;
        $t_message = $request->t_message;
        $c_message = $request->c_message;
        $img_1 = $request->img_1;
        $img_2 = $request->img_2;
        $img_3 = $request->img_3;
        $img_4 = $request->img_4;
        $img_5 = $request->img_5;
        $img_6 = $request->img_6;
        $img_7 = $request->img_7;
        $img_8 = $request->img_8;
        $img_9 = $request->img_9;
        $img_10 = $request->img_10;

        $info = Main::find($index);
        if ($info) {
            $info->update([
                'c_name' => $c_name,
                'c_address' => $c_address,
                'c_member' => $c_member,
                'c_member_email' => $c_member_email,
                'c_phone' => $c_phone,
                'c_site' => $c_site,
                'job_type' => $job_type,
                'em_type' => $em_type,
                'em_num' => $em_num,
                'work_time' => $work_time,
                'rest_time' => $rest_time,
                'pay_amount' => $pay_amount,
                'rest_day' => $rest_day,
                'insurance' => $insurance,
                'commuting_allowance' => $commuting_allowance,
                'academic_history' => $academic_history,
                'degree' => $degree,
                'other' => $other,
                't_message' => $t_message,
                'c_message' => $c_message,
                'img_1' => $img_1,
                'img_2' => $img_2,
                'img_3' => $img_3,
                'img_4' => $img_4,
                'img_5' => $img_5,
                'img_6' => $img_6,
                'img_7' => $img_7,
                'img_8' => $img_8,
                'img_9' => $img_9,
                'img_10' => $img_10,
            ]);

            $data = [
                'status' => 200,
                'message' => '更新成功',
                'info' => $info // Include any additional data you want to send to the view
            ];
            return response()->json($data, 200);
        } else {
            return response()->json(['status' => 401, 'message' => '事業所が見つかりません。'], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function extend(Request $request)
    {
        $index = $request->index;

        $data0 = Main::query()
            ->when($index, function ($query) use ($index) {
                return $query->where('id', $index);
            })
            ->first();

        if ($data0) {
            $newExpireDate = Carbon::parse($data0->enter_date)->addDays(30)->format('Y-m-d');
            // dd($newExpireDate);
            $data0->update([
                'enter_date' => $newExpireDate,
            ]);

            $data = [
                'status' => 200,
                'message' => '成果的に延長されました。',
                'data' => $data0
            ];
            return response()->json($data, 200);
        }

        return response()->json(['message' => 'データが見つかりませんでした。'], 404);
    }
}