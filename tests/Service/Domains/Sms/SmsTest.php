<?php

namespace Jaddek\Services\Notification\Tests\Service\Domains\Sms;

use Jaddek\Services\Notification\Domains\Sms\Sms;
use Jaddek\Services\Notification\Tests\TestCase;

/**
 * Class SmsTest
 * @package Jaddek\Services\Notification\Tests\Service\Domains\Sms
 */
class SmsTest extends TestCase
{
    /**
     * @dataProvider smsProvider
     * @param array $params
     */
    public function testSetParams(array $params)
    {
        $sms = new Sms();

        $sms->setParams($params);

        $this->assertEquals($params['phone'], $sms->getPhone());
        $this->assertEquals($params['text'], $sms->getText());
        $this->assertEquals($params['sender'], $sms->getSender());
    }
}