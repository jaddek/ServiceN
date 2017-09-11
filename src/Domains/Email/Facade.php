<?php

namespace Jaddek\Services\Notification\Domains\Email;

use Jaddek\Services\Notification\Interfaces\Email\TransportInterface;
use Jaddek\Services\Notification\Interfaces\Email\FactoryInterface;
use Jaddek\Services\Notification\Interfaces\Email\MessageInterface;
use Jaddek\Services\Notification\Interfaces\Email\SenderFactoryInterface;

/**
 * Class Facade
 * @package Jaddek\Services\Notification\Domains\Email
 */
class Facade
{
    /**
     * @var SenderFactoryInterface
     */
    protected $senderFactory;

    /**
     * @var FactoryInterface
     */
    protected $emailFactory;

    /**
     * Facade constructor.
     * @param SenderFactoryInterface $senderFactory
     * @param FactoryInterface $emailFactory
     */
    public function __construct(SenderFactoryInterface $senderFactory, FactoryInterface $emailFactory)
    {
        $this->senderFactory = $senderFactory;
        $this->emailFactory  = $emailFactory;
    }

    /**
     * @return FactoryInterface
     */
    public function getEmailFactory()
    {
        return $this->emailFactory;
    }

    /**
     * @return SenderFactoryInterface
     */
    public function getSenderFactory()
    {
        return $this->senderFactory;
    }

    /**
     * @param array $params
     * @param TransportInterface $transport
     * @param MessageInterface $message
     * @return mixed
     */
    public function send(array $params, TransportInterface $transport, MessageInterface $message)
    {
        $email  = $this->getEmailFactory()->create();
        $email->setParams($params);

        $sender = $this->getSenderFactory()->create();
        $sender->setTransport($transport);

        $email = $message->transform($email);

        return $sender->send($email);
    }

}