<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterRequested extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        public string $link,
    )
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.register.requested')
            ->tag('register-requested')
            ->metadata('template', 'general.action')
            ->metadata('variables', serialize([
                'heading' => __('Register Request Accepted'),
                'description' => __('Your register request has been accepted. Please click the button below to complete the registration process.'),
                'action' => __('Register'),
                'action_url' => $this->link,
                'footer' => __('If you did not request a register, no further action is required.'),
            ]));
    }
}
