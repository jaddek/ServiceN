<?php

namespace Jaddek\Services\Notification\Domains\Factories\Sms;

use Jaddek\Services\Notification\Domains\Sms\Sms;
use Jaddek\Services\Notification\Interfaces\Sms\FactoryInterface;
use Jaddek\Services\Notification\Interfaces\Sms\SmsInterface;

/**
 * Class SmsFactory
 * @package Jaddek\Services\Notification\Domains\Factories\Sms
 */
class SmsFactory implements FactoryInterface
{
    /**
     * @return SmsInterface
     */
    public function create(): SmsInterface
    {
        return new Sms();
    }
}