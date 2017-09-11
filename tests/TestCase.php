<?php

namespace Jaddek\Services\Notification\Tests;

use Jaddek\Services\Notification\Domains\Email\Transports\SwiftTransport;
use Jaddek\Services\Notification\Domains\Sms\Transports\SmscTransport;
use SMSCenter\SMSCenter;

/**
 * Class TestCase
 * @package Jaddek\Services\Notification\Tests
 */
abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @return array
     */
    public function smsProvider()
    {
        return [
            [['phone' => 123, 'text' => 'text', 'sender' => 'sender']],
        ];
    }

    /**
     * @return array
     */
    public function emailProvider()
    {
        return [
            [['to' => 'test@test.com', 'from' => 'test@test.com', 'body' => 'body', 'subject' => 'subject']],
        ];
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    public function getSmsMockProvider()
    {
        $mock = $this->createMock(SMSCenter::class);
        $mock->method('send')->willReturn(1);

        return $mock;
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    public function createSmsMockTransport()
    {
        $mock = $this->createMock(SmscTransport::class);
        $mock->method('getClient')
            ->will($this->returnValue($this->getSmsMockProvider()));

        return $mock;
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    public function getEmailMockMailer()
    {
        $mock = $this->createMock(\Swift_Mailer::class);
        $mock->method('send')->willReturn(1);

        return $mock;
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    public function createEmailMockTransport()
    {
        $mock = $this->createMock(SwiftTransport::class);

        $mock->method('getClient')
            ->will($this->returnValue($this->getEmailMockMailer()));

        return $mock;
    }
}