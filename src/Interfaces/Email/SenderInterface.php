<?php

namespace Jaddek\Services\Notification\Interfaces\Email;

/**
 * Interface EmailInterface
 * @package Jaddek\Services\Notification\Interfaces\Email
 */
interface SenderInterface
{
    /**
     * @param MessageInterface $sms
     * @return mixed
     */
    public function send(MessageInterface $sms);

    /**
     * @param $transport
     * @return SenderInterface
     */
    public function setTransport(TransportInterface $transport): SenderInterface;
}