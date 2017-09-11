<?php

namespace Jaddek\Services\Notification\Tests\Service\Domains\Factories\Sms;

use Jaddek\Services\Notification\Domains\Factories\Sms\SenderFactory;
use Jaddek\Services\Notification\Interfaces\Sms\SenderInterface;
use Jaddek\Services\Notification\Tests\TestCase;

/**
 * Class SenderFactoryTest
 * @package Jaddek\Services\Notification\Tests\Service\Domains\Factories\Sms
 */
class SenderFactoryTest extends TestCase
{
    /**
     *
     */
    public function testFactoryCreate()
    {
        $factory = new SenderFactory();

        $sender = $factory->create();

        $this->assertInstanceOf(SenderInterface::class, $sender);
    }
}