<?php

namespace Jaddek\Services\Notification\Tests\Service\Domains\Email;

use Jaddek\Services\Notification\Domains\Email\Email;
use Jaddek\Services\Notification\Tests\TestCase;

/**
 * Class SmsTest
 * @package Jaddek\Services\Notification\Tests\Service\Domains\Sms
 */
class EmailTest extends TestCase
{
    /**
     * @dataProvider emailProvider
     * @param array $params
     */
    public function testSetParams(array $params)
    {
        $email = new Email();

        $email->setParams($params);

        $this->assertEquals($params['to'], $email->getTo());
        $this->assertEquals($params['from'], $email->getFrom());
        $this->assertEquals($params['subject'], $email->getSubject());
        $this->assertEquals($params['body'], $email->getBody());
    }
}