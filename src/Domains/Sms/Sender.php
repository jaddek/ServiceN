<?php

namespace Jaddek\Services\Notification\Domains\Sms;

use Jaddek\Services\Notification\Interfaces\Sms\SenderInterface;
use Jaddek\Services\Notification\Interfaces\Sms\SmsInterface;
use Jaddek\Services\Notification\Interfaces\Sms\TransportInterface;

/**
 * Class SmsSender
 * @package Jaddek\Services\Notification
 */
class Sender implements SenderInterface
{
    /**
     * @var TransportInterface
     */
    protected $transport;

    /**
     * @param TransportInterface $transport
     * @return SenderInterface
     */
    public function setTransport(TransportInterface $transport): SenderInterface
    {
        $this->transport = $transport;

        return $this;
    }
    /**
     * @param SmsInterface $sms
     * @return mixed
     */
    public function send(SmsInterface $sms)
    {
        return $this->transport->getClient()->send($sms->getPhone(), $sms->getText(), $sms->getSender());
    }
}