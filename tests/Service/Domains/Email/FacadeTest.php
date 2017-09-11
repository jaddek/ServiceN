<?php

namespace Jaddek\Services\Notification\Tests\Service\Domains\Emai;

use Jaddek\Services\Notification\Domains\Email\Facade;
use Jaddek\Services\Notification\Domains\Factories\Email\EmailFactory;
use Jaddek\Services\Notification\Interfaces\Email\SenderFactoryInterface;
use Jaddek\Services\Notification\Tests\TestCase;

/**
 * Class FacadeTest
 * @package Jaddek\Services\Notification\Tests\Service\Domains\Sms
 */
class FacadeTest extends TestCase
{
    public function testInit()
    {
        $senderFactory = $this->createMock(SenderFactoryInterface::class);
        $emailFactory = $this->createMock(EmailFactory::class);

        $facade = new Facade($senderFactory, $emailFactory);

        $this->assertObjectHasAttribute('senderFactory', $facade);
        $this->assertObjectHasAttribute('emailFactory', $facade);

        $this->assertInstanceOf(SenderFactoryInterface::class, $facade->getSenderFactory());
        $this->assertInstanceOf(EmailFactory::class, $facade->getEmailFactory());
    }
}