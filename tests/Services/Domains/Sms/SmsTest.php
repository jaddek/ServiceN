<?php

declare(strict_types=1);

namespace Jaddek\Services\Notification\Tests\Service\Domains\Sms;

use Jaddek\Services\Notification\Domains\Sms\Sms;
use Jaddek\Services\Notification\Tests\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class SmsTest extends TestCase
{
    #[DataProvider('smsProvider')]
    public function testSetParams(array $params)
    {
        $sms = new Sms();

        $sms->setParams($params);

        $this->assertEquals($params['phone'], $sms->getPhone());
        $this->assertEquals($params['text'], $sms->getText());
        $this->assertEquals($params['sender'], $sms->getSender());
    }
}