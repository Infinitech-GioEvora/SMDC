<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\Setting;

use Mail;
use App\Mail\AdminViewingMail;

class SendAViewingMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $mail_data;
    public function __construct($mail_data)
    {
        $this->mail_data = $mail_data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $setting = Setting::first();
        Mail::to($setting->email)->send(new AdminViewingMail($this->mail_data));
    }
}
