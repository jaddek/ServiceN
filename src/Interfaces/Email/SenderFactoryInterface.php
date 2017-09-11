<?php

namespace Jaddek\Services\Notification\Interfaces\Email;

/**
 * Interface SenderFactoryInterface
 * @package Jaddek\Services\Notification\Interfaces
 */
interface SenderFactoryInterface
{
    /**
     * @return SenderInterface
     */
    public function create(): SenderInterface;
}