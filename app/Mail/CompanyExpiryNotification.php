<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use App\Models\Extend_verify_token;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;
class CompanyExpiryNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
    
    /**
     * Create a new message instance.
     *
     * @param array $mailData
     * 
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

     /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $token = Str::random(40);
        $existed = Extend_verify_token::where('email', $this->mailData['expired_user'])->first();
        // dd($existed);
        if ($existed) {
            // If the record exists, update the token
            $existed->update(['token' => $token]);
        } else {
            // If the record doesn't exist, create a new one
            Extend_verify_token::create([
                'email' => $this->mailData['expired_user'],
                'token' => $token
            ]);
        }

        return $this->subject('掲載延長のお知らせ')
                    ->view('emails.company_expiry_notification')
                    ->with(['mailData' => $this->mailData, 'token' => $token]);
    }
}
