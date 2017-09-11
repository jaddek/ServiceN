<?php

namespace Jaddek\Services\Notification\Domains\Factories\Sms;

use Jaddek\Services\Notification\Domains\Sms\Sender;
use Jaddek\Services\Notification\Interfaces\Sms\SenderFactoryInterface;
use Jaddek\Services\Notification\Interfaces\Sms\SenderInterface;

/**
 * Class SenderFactory
 * @package Jaddek\Services\Notification\Domains\Factories
 */
class SenderFactory implements SenderFactoryInterface
{
    /**
     * @return SenderInterface
     */
    public function create(): SenderInterface
    {
        return new Sender();
    }
}