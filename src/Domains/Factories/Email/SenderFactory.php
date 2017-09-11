<?php

namespace Jaddek\Services\Notification\Domains\Factories\Email;

use Jaddek\Services\Notification\Domains\Email\Sender;
use Jaddek\Services\Notification\Interfaces\Email\SenderFactoryInterface;
use Jaddek\Services\Notification\Interfaces\Email\SenderInterface;

/**
 * Class SenderFactory
 * @package Jaddek\Services\Notification\Domains\Factories
 */
class SenderFactory implements SenderFactoryInterface
{
    /**
     * @return SenderInterface
     */
    public function create(): SenderInterface
    {
        return new Sender();
    }
}