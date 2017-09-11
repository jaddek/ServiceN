<?php

namespace Jaddek\Services\Notification\Tests\Service\Domains\Email;

use Jaddek\Services\Notification\Domains\Email\Email;
use Jaddek\Services\Notification\Domains\Email\Messages\SwiftMessage;
use Jaddek\Services\Notification\Domains\Email\Sender;
use Jaddek\Services\Notification\Tests\TestCase;

/**
 * Class SenderTest
 * @package Jaddek\Services\Notification\Tests\Service\Domains\Sms
 */
class SenderTest extends TestCase
{
    /**
     * @dataProvider emailProvider
     * @param array $params
     */
    public function testSend(array $params)
    {
        $transport = $this->createEmailMockTransport();

        $email = new Email();
        $email->setParams($params);

        $sender = new Sender();
        $sender->setTransport($transport);

        $email = (new SwiftMessage())->transform($email);

        $result = $sender->send($email);

        $this->assertEquals(1, $result);
    }
}