<?php
namespace App\Http\Controllers;
use App\Models\Main;
use App\Mail\CompanyExpiryNotification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ExpireController extends Controller
{
    public function index() {
        $expirePeriod = 5; // 5 minutes
        $companies = Main::where('enter_date', '<=', now()->subMinutes($expirePeriod))->get();

        foreach ($companies as $company) {
            $expirationDate = Carbon::parse($company->enter_date)->addMinutes($expirePeriod);

            $notificationDate = $expirationDate->subMinutes(3);

            if (now() >= $notificationDate) {
                $this->sendExpirationNotification($company);
            }

            // $company->delete();
        }
    }

    public function sendExpirationNotification($company)
    {
        $mailData = [
            'companyName' => $company -> c_name,
            'expired_user' => $company -> c_member_email,
            'expirationDate' => Carbon::parse($company->enter_date)->addMinutes(5)->format('Y-m-d H:i:s'),
        ];

            Mail::to($company->c_member_email)->send(new CompanyExpiryNotification($mailData));
    }

    
}