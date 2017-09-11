<?php

namespace Jaddek\Services\Notification\Domains\Sms;

use Jaddek\Services\Notification\Interfaces\Sms\FactoryInterface;
use Jaddek\Services\Notification\Interfaces\Sms\SenderFactoryInterface;
use Jaddek\Services\Notification\Interfaces\Sms\TransportInterface;

/**
 * Class Facade
 * @package Jaddek\Services\Notification
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
    protected $smsFactory;

    /**
     * Facade constructor.
     * @param SenderFactoryInterface $senderFactory
     * @param FactoryInterface $smsFactory
     */
    public function __construct(
        SenderFactoryInterface $senderFactory,
        FactoryInterface $smsFactory
    ) {
        $this->senderFactory = $senderFactory;
        $this->smsFactory    = $smsFactory;
    }

    /**
     * @return FactoryInterface
     */
    public function getSmsFactory()
    {
        return $this->smsFactory;
    }

    /**
     * @return SenderFactoryInterface
     */
    public function getSenderFactory()
    {
        return $this->senderFactory;
    }

    /**
     * @param TransportInterface $transport
     * @param array $params
     * @return mixed
     */
    public function send(array $params, TransportInterface $transport)
    {
        $sms    = $this->getSmsFactory()->create();
        $sender = $this->getSenderFactory()->create();

        $sms->setParams($params);

        $sender->setTransport($transport);

        return $sender->send($sms);
    }
}