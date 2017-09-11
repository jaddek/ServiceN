<?php

namespace Jaddek\Services\Notification\Tests\Service\Domains\Sms;

use Jaddek\Services\Notification\Domains\Sms\Sender;
use Jaddek\Services\Notification\Domains\Sms\Sms;
use Jaddek\Services\Notification\Tests\TestCase;

/**
 * Class SmsTest
 * @package Jaddek\Services\Notification\Tests\Service\Domains\Sms
 */
class SenderTest extends TestCase
{
    /**
     * @dataProvider smsProvider
     * @param array $params
     */
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