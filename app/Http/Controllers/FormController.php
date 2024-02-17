<?php
namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\SuccessMail;
use App\Mail\ManagerMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Main;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $id = $request->id;
        $data = Main::query()
            ->when($id, function ($query) use ($id) {
                return $query->where('id', $id);
            })
            ->first();

        $c_name = $data->c_name;
        $info = User::query()
            ->when($c_name, function ($query) use ($c_name) {
                return $query->where('c_name', $c_name);
            })
            ->first();

        $role = 1;
        $manager = User::query()
            ->when($role, function ($query) use ($role) {
                return $query->where('role', $role);
            })
            ->first();

        return view('Form.index', ['data' => $info, 'manager' => $manager]);
    }

    /**
     * Send mail
     */
    public function sendMail(Request $request)
    {

        $receiver = $request->receiver;
        $manager = $request->manager;
        $c_name = $request->c_name;
        $c_address = $request->c_address;
        $c_phone = $request->c_phone;

        $validatedData = [
            'surname01' => $request->surname01,
            'name01' => $request->name01,
            'surname02' => $request->surname02,
            'name02' => $request->name02,
            'address' => $request->address,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'age' => $request->age,
            'hopeful_job' => $request->hopeful_job,
            'job_type' => $request->job_type,
            'degree' => $request->input('degree', []),
            'other_degree' => $request->other_degree
        ];

        if (empty($receiver) || !filter_var($receiver, FILTER_VALIDATE_EMAIL)) {
            return redirect('/form')->with('error', '送信エラー');
        } else if (empty($manager) || !filter_var($manager, FILTER_VALIDATE_EMAIL)) {
            return redirect('/form')->with('error', '送信エラー');
        } else if (empty($request->email) || !filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return redirect('/form')->with('error', '送信エラー');
        }

        Mail::to($receiver)->send(new ContactMail($validatedData));
        Mail::to($manager)->send(new ManagerMail($validatedData));
        Mail::to($request->email)->send(new SuccessMail($validatedData));
        // return $receiver;
        return redirect('/thank')->with([
            'success' => '送信成功!',
            'c_name' => $c_name,
            'c_address' => $c_address,
            'c_phone' => $c_phone
        ]);
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
