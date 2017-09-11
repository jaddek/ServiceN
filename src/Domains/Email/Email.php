<?php

namespace Jaddek\Services\Notification\Domains\Email;

use Jaddek\Services\Notification\Domains\Foundation\ObjectTrait;
use Jaddek\Services\Notification\Interfaces\Email\EmailInterface;
use Jaddek\Services\Notification\Interfaces\ObjectInterface;

/**
 * Class Email
 * @package Jaddek\Services\Notification\Domains\Email
 */
class Email implements EmailInterface, ObjectInterface
{
    use ObjectTrait;
    /**
     * @var
     */
    public $body;
    /**
     * @var
     */
    public $from;
    /**
     * @var
     */
    public $subject;
    /**
     * @var
     */
    public $html;
    /**
     * @var
     */
    public $to;

    /**
     *
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     *
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     *
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     *
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     *
     */
    public function getTo()
    {
        return $this->to;
    }
}