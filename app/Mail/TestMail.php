<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $company;

    public function __construct($company)
    {
        $this->company = $company;
    }

    public function build()
    {
        try {
            return $this->subject('Welcome!')
                ->view('emails.new_company')
                ->with([
                    'company' => $this->company
                ]);
        } catch (\Exception $e) {
            Log::error('Failed to build TestMail: ' . $e->getMessage());
            throw $e;
        }
    }
}
