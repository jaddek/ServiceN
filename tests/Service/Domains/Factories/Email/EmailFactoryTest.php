<?php

namespace Jaddek\Services\Notification\Tests\Service\Domains\Factories\Email;

use Jaddek\Services\Notification\Domains\Factories\Email\EmailFactory;
use Jaddek\Services\Notification\Interfaces\Email\EmailInterface;
use Jaddek\Services\Notification\Tests\TestCase;

/**
 * Class SmsFactoryTest
 * @package Jaddek\Services\Notification\Tests\Service\Domains\Factories\Email
 */
class SmsFactoryTest extends TestCase
{
    /**
     *
     */
    public function testFactoryCreate()
    {
        $factory = new EmailFactory();

        $sender = $factory->create();

        $this->assertInstanceOf(EmailInterface::class, $sender);
    }
}