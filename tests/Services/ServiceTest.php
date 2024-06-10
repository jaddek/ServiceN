<?php

declare(strict_types=1);

namespace Jaddek\Services\Notification\Tests\Service;

use Jaddek\Services\Notification\Domains\Email\Messages\SwiftMessage;
use Jaddek\Services\Notification\Tests\TestCase;
use Jaddek\Services\Notification\Service;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\MockObject\Exception;

class ServiceTest extends TestCase
{
    /**
     * @throws Exception
     */
    #[DataProvider('smsProvider')]
    public function testSmsSend(array $data)
    {
        $transport = $this->createSmsMockTransport();

        $service = new Service();
        $result = $service->sendSms($data['phone'], $data['text'], $transport);

        $this->assertEquals(1, $result);
    }

    #[DataProvider('emailProvider')]
    public function testSendEmail(array $data)
    {
        $transport = $this->createEmailMockTransport();
        $message = new SwiftMessage();

        $service = new Service();
        $result = $service->sendEmail($data['to'], $data['from'], $data['subject'], $data['body'], $transport, $message);

        $this->assertEquals(1, $result);
    }
}