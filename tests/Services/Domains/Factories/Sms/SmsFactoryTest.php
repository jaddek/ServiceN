<?php

namespace Jaddek\Services\Notification\Tests\Service\Domains\Factories\Sms;

use Jaddek\Services\Notification\Domains\Factories\Sms\SmsFactory;
use Jaddek\Services\Notification\Interfaces\Sms\SmsInterface;
use Jaddek\Services\Notification\Tests\TestCase;

/**
 * Class SmsFactoryTest
 * @package Jaddek\Services\Notification\Tests\Service\Domains\Factories\Sms
 */
class SmsFactoryTest extends TestCase
{
    /**
     *
     */
    public function testFactoryCreate()
    {
        $factory = new SmsFactory();

        $sender = $factory->create();

        $this->assertInstanceOf(SmsInterface::class, $sender);
    }
}