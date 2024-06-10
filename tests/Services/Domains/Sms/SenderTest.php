<?php

declare(strict_types=1);

namespace Jaddek\Services\Notification\Tests\Service\Domains\Sms;

use Jaddek\Services\Notification\Domains\Sms\Sender;
use Jaddek\Services\Notification\Domains\Sms\Sms;
use Jaddek\Services\Notification\Tests\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\MockObject\Exception;

class SenderTest extends TestCase
{
    /**
     * @throws Exception
     */
    #[DataProvider('smsProvider')]
    public function testSend(array $params)
    {
        $transport = $this->createSmsMockTransport();

        $sms = new Sms();

        $sms->setParams($params);

        $sender = new Sender();

        $sender->setTransport($transport);

        $result = $sender->send($sms);

        $this->assertEquals(1, $result);
    }
}