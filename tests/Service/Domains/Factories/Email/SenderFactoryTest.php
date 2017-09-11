<?php

namespace Jaddek\Services\Notification\Tests\Service\Domains\Factories\Email;

use Jaddek\Services\Notification\Domains\Email\Sender;
use Jaddek\Services\Notification\Domains\Factories\Email\SenderFactory;
use Jaddek\Services\Notification\Tests\TestCase;

/**
 * Class SenderFactoryTest
 * @package Jaddek\Services\Notification\Tests\Service\Domains\Factories\Email
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

        $this->assertInstanceOf(Sender::class, $sender);
    }
}