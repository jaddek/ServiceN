<?php

namespace Jaddek\Services\Notification\Tests;

use Jaddek\Services\Notification\Domains\Email\Transports\SwiftTransport;
use Jaddek\Services\Notification\Domains\Sms\Transports\SmscTransport;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\MockObject\MockObject;
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
    public static function smsProvider(): array
    {
        return [
            [['phone' => '123', 'text' => 'text', 'sender' => 'sender']],
        ];
    }

    /**
     * @return array
     */
    public static function emailProvider(): array
    {
        return [
            [['to' => 'test@test.com', 'from' => 'test@test.com', 'body' => 'body', 'subject' => 'subject']],
        ];
    }

    /**
     * @return (object&\PHPUnit\Framework\MockObject\MockObject)|\PHPUnit\Framework\MockObject\MockObject|SMSCenter|(SMSCenter&object&\PHPUnit\Framework\MockObject\MockObject)|(SMSCenter&\PHPUnit\Framework\MockObject\MockObject)
     * @throws Exception
     */
    public function getSmsMockProvider(): MockObject
    {
        $mock = $this->createMock(SMSCenter::class);
        $mock->method('send')->willReturn(1);

        return $mock;
    }

    /**
     * @throws Exception
     */
    public function createSmsMockTransport(): MockObject|SmscTransport
    {
        $mock = $this->createMock(SmscTransport::class);
        $mock->method('getClient')
            ->willReturn($this->getSmsMockProvider());

        return $mock;
    }

    /**
     * @throws Exception
     */
    public function getEmailMockMailer(): MockObject
    {
        $mock = $this->createMock(\Swift_Mailer::class);
        $mock->method('send')->willReturn(1);

        return $mock;
    }

    public function createEmailMockTransport(): MockObject|SwiftTransport
    {
        $mock = $this->createMock(SwiftTransport::class);

        $mock->method('getClient')
            ->willReturn($this->getEmailMockMailer());

        return $mock;
    }
}