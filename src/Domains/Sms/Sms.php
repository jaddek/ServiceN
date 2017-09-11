<?php

namespace Jaddek\Services\Notification\Domains\Sms;

use Jaddek\Services\Notification\Domains\Foundation\ObjectTrait;
use Jaddek\Services\Notification\Interfaces\ObjectInterface;
use Jaddek\Services\Notification\Interfaces\Sms\SmsInterface;

/**
 * Class Sms
 * @package Jaddek\Services\Notification\Sms
 */
class Sms implements SmsInterface, ObjectInterface
{
    use ObjectTrait;
    /**
     * @var
     */
    public $phone;
    /**
     * @var
     */
    public $text;
    /**
     * @var
     */
    public $sender;

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }
}