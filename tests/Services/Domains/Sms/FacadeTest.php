<?php

declare(strict_types=1);

namespace Jaddek\Services\Notification\Tests\Service\Domains\Sms;

use Jaddek\Services\Notification\Domains\Factories\Sms\SmsFactory;
use Jaddek\Services\Notification\Domains\Sms\Facade;
use Jaddek\Services\Notification\Interfaces\Sms\SenderFactoryInterface;
use Jaddek\Services\Notification\Tests\TestCase;

class FacadeTest extends TestCase
{
    public function testInit()
    {
        $senderFactory = $this->createMock(SenderFactoryInterface::class);
        $smsFactory = $this->createMock(SmsFactory::class);

        $facade = new Facade($senderFactory, $smsFactory);

        $this->assertObjectHasProperty('senderFactory', $facade);
        $this->assertObjectHasProperty('smsFactory', $facade);

        $this->assertInstanceOf(SenderFactoryInterface::class, $facade->getSenderFactory());
        $this->assertInstanceOf(SmsFactory::class, $facade->getSmsFactory());
    }
}