<?php

namespace Jaddek\Services\Notification\Interfaces\Sms;

/**
 * Interface SenderInterface
 * @package Jaddek\Services\Notification\Interfaces
 */
interface SenderInterface
{
    /**
     * @param SmsInterface $sms
     * @return mixed
     */
    public function send(SmsInterface $sms);

    /**
     * @param $transport
     * @return SenderInterface
     */
    public function setTransport(TransportInterface $transport): SenderInterface;
}