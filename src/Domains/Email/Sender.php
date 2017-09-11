<?php

namespace Jaddek\Services\Notification\Domains\Email;

use Jaddek\Services\Notification\Interfaces\Email\MessageInterface;
use Jaddek\Services\Notification\Interfaces\Email\TransportInterface;
use Jaddek\Services\Notification\Interfaces\Email\SenderInterface;

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
     * @param MessageInterface $email
     * @return mixed
     */
    public function send(MessageInterface $email)
    {
        return $this->transport->getClient()->send($email->getMessage());
    }
    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->transport->getClient(), $name], [$arguments]);
    }
}