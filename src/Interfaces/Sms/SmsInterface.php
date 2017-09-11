<?php

namespace Jaddek\Services\Notification\Interfaces\Sms;

/**
 * Interface SmsInterface
 * @package Jaddek\Services\Notification\Interfaces
 */
interface SmsInterface
{
    /**
     * @return mixed
     */
    public function getPhone();

    /**
     * @return mixed
     */
    public function getText();

    /**
     * @return mixed
     */
    public function getSender();
}