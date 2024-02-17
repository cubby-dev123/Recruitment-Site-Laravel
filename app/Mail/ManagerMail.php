<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class ManagerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.manager') 
                    ->subject('メッセージが届きました。')
                    ->with([
                        'surname01' => $this->data['surname01'],
                        'name01' => $this->data['name01'],
                        'surname02' => $this->data['surname02'],
                        'name02' => $this->data['name02'],
                        'address' => $this->data['address'],
                        'email' => $this->data['email'],
                        'phone_number' => $this->data['phone_number'],
                        'gender' => $this->data['gender'],
                        'age' => $this->data['age'],
                        'hopeful_job' => $this->data['hopeful_job'],
                        'job_type' => $this->data['job_type'],
                        'degree' => is_array($this->data['degree']) ? implode(', ', $this->data['degree']) : $this->data['degree'],
                        'other_degree' => $this->data['other_degree'],
                    ]);
    }
}
