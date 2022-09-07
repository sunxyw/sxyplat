<?php

namespace App\Mail\Transports;

use Mailgun\Mailgun;
use Symfony\Component\Mailer\SentMessage;
use Symfony\Component\Mailer\Transport\AbstractTransport;
use Symfony\Component\Mime\MessageConverter;

class TemplatedMailgunTransport extends AbstractTransport
{
    public function __construct(protected Mailgun $client)
    {
        parent::__construct();
    }

    protected function doSend(SentMessage $message): void
    {
        $email = MessageConverter::toEmail($message->getOriginalMessage());
        $template = $email->getHeaders()->get('x-metadata-template')?->getBodyAsString();
        $variables = $email->getHeaders()->get('x-metadata-variables')?->getBodyAsString();
        $variables = $variables ? unserialize($variables, ['allowed_classes' => []]) : [];

        $this->client->messages()->send(config('services.mailgun.domain'), [
            'from' => $email->getFrom()[0]->toString(),
            'to' => collect($email->getTo())->map(fn($address) => $address->toString())->toArray(),
            'subject' => $email->getSubject(),
            'template' => $template,
            'text' => $email->getTextBody(),
            't:variables' => json_encode($variables, JSON_THROW_ON_ERROR),
        ]);
    }

    public function __toString(): string
    {
        return 'templated-mailgun';
    }
}
