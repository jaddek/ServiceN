<?php

namespace Jaddek\Services\Notification\Interfaces\Sms;

interface FactoryInterface
{
    public function create(): SmsInterface;
}