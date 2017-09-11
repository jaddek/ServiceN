<?php

namespace Jaddek\Services\Notification\Interfaces\Email;

/**
 * Interface EmailInterface
 * @package Jaddek\Services\Notification\Interfaces\Email
 */
interface EmailInterface
{
    /**
     * @return mixed
     */
    public function getSubject();

    /**
     * @return mixed
     */
    public function getTo();

    /**
     * @return mixed
     */
    public function getFrom();

    /**
     * @return mixed
     */
    public function getBody();

    /**
     * @return mixed
     */
    public function getHtml();
}