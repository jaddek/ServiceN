<?php

namespace Jaddek\Services\Notification\Domains\Email\Messages;

use Jaddek\Services\Notification\Interfaces\Email\EmailInterface;
use Jaddek\Services\Notification\Interfaces\Email\MessageInterface;

/**
 * Class SwiftMessage
 * @package Jaddek\Services\Notification\Domains\Email\Messages
 */
class SwiftMessage implements MessageInterface
{
    protected $message;

    /**
     * @param EmailInterface $email
     * @return MessageInterface
     */
    public function transform(EmailInterface $email): MessageInterface
    {
        $this->message = (new \Swift_Message($email->getSubject()))
            ->setFrom($email->getFrom())
            ->setTo($email->getTo())
            ->setBody($email->getBody());

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}