<?php

declare(strict_types=1);

namespace Jaddek\Services\Notification;

use Jaddek\Services\Notification\Domains\Factories\Email\EmailFactory;
use Jaddek\Services\Notification\Domains\Factories\Sms\SenderFactory as SmsSenderFactory;
use Jaddek\Services\Notification\Domains\Factories\Email\SenderFactory as EmailSenderFactory;
use Jaddek\Services\Notification\Domains\Factories\Sms\SmsFactory;
use Jaddek\Services\Notification\Domains\Sms\Facade as SmsFacade;
use Jaddek\Services\Notification\Domains\Email\Facade as EmailFacade;
use Jaddek\Services\Notification\Interfaces\Email\MessageInterface;
use Jaddek\Services\Notification\Interfaces\Email\TransportInterface as EmailTransportInterface;
use Jaddek\Services\Notification\Interfaces\Sms\TransportInterface as SmsTransportInterface;

class Service
{
    protected readonly SmsFacade $sms;
    protected readonly EmailFacade $email;

    public function __construct()
    {
        $this->sms   = (new SmsFacade(new SmsSenderFactory(), new SmsFactory()));
        $this->email = (new EmailFacade(new EmailSenderFactory(), new EmailFactory()));
    }

    /**
     * @param string $phone
     * @param string $text
     * @param SmsTransportInterface $transport
     * @return mixed
     */
    public function sendSms(string $phone, string $text, SmsTransportInterface $transport)
    {
        return $this->sms->send(['phone' => $phone, 'text' => $text], $transport);
    }

    /**
     * @param $to
     * @param $from
     * @param string $subject
     * @param string $body
     * @param EmailTransportInterface $transport
     * @param MessageInterface $message
     * @return mixed
     */
    public function sendEmail(
        $to,
        $from,
        string $subject,
        string $body,
        EmailTransportInterface $transport,
        MessageInterface $message
    ) {
        return $this->email->send([
            'to'      => $to,
            'from'    => $from,
            'subject' => $subject,
            'body'    => $body,
        ], $transport, $message);
    }

}