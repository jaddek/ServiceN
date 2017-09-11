<?php

namespace Jaddek\Services\Notification\Domains\Factories\Email;

use Jaddek\Services\Notification\Domains\Email\Email;
use Jaddek\Services\Notification\Interfaces\Email\FactoryInterface;
use Jaddek\Services\Notification\Interfaces\Email\EmailInterface;
use Jaddek\Services\Notification\Interfaces\ObjectInterface;

/**
 * Class SmsFactory
 * @package Jaddek\Services\Notification\Domains\Factories
 */
class EmailFactory implements FactoryInterface
{
    /**
     * @return EmailInterface|ObjectInterface
     */
    public function create(): EmailInterface
    {
        return new Email();
    }
}