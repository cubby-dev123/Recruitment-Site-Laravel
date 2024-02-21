<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use App\Models\Main;
use App\Mail\CompanyExpiryNotification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {

            $expirePeriod = 5; 
            $companies = Main::where('enter_date', '<=', now()->subMinutes($expirePeriod))
                  ->where('switch_input', '!=', 1)
                  ->get();

            foreach ($companies as $company) {
                $expirationDate = Carbon::parse($company->enter_date)->addMinutes($expirePeriod);

                $notificationDate = $expirationDate->subMinutes(3);

                if (now() >= $notificationDate) {
                    $this->sendExpirationNotification($company);
                }
                else {
                    $index = Main::find($company);
                    if($index) {
                        $index->delete();
                    }
                }
            }

        })->everyMinute();
    }

    /**
     * Send expiration notification email to the company.
     *
     * @param \App\Models\Main $company
     * @return void
     */
    private function sendExpirationNotification($company)
    {
        $mailData = [
            'companyName' => $company->c_name,
            'expired_user' => $company->c_member_email,
            'expirationDate' => Carbon::parse($company->enter_date)->addMinutes(60)->format('Y-m-d'),
        ];

        Mail::to($company->c_member_email)->send(new CompanyExpiryNotification($mailData));
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}