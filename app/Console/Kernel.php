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
            $expirePeriod = 60; 
            $companies = Main::where('enter_date', '<=', now()->subDays($expirePeriod))->get();

            foreach ($companies as $company) {
                $expirationDate = Carbon::parse($company->enter_date)->addDays($expirePeriod);

                // Check if it's time to send notification
                if (now() >= $expirationDate) {
                    $this->sendExpirationNotification($company);
                }
                $company->delete();
            }
        })->daily();
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
            'expirationDate' => Carbon::parse($company->enter_date)->addDays(60)->format('Y-m-d'),
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