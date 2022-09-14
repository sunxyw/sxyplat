<?php

namespace App\Notifications;

use DansMaCulotte\MailTemplate\MailTemplate;
use DansMaCulotte\MailTemplate\MailTemplateChannel;
use DansMaCulotte\MailTemplate\MailTemplateFacade;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VerifyCodeRequested extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(public string $code)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [MailTemplateChannel::class];
    }

    public function toMailTemplate($notifiable)
    {
        return MailTemplateFacade::prepare(
            'Verify Code',
            [
                'name' => config('mail.from.name'),
                'email' => config('mail.from.address'),
            ],
            [
                'name' => $notifiable->name,
                'email' => $notifiable->email,
            ],
            'verify_code',
            config('app.locale'),
            [
                'code' => $this->code,
            ]
        );
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
