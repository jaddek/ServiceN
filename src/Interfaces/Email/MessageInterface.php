<?php

namespace Jaddek\Services\Notification\Interfaces\Email;

/**
 * Interface MessageInterface
 * @package Jaddek\Services\Notification\Interfaces\Email
 */
interface MessageInterface
{
    /**
     * @param EmailInterface $email
     * @return mixed
     */
    public function transform(EmailInterface $email): MessageInterface;

    /**
     * @return mixed
     */
    public function getMessage();
}