<?php
/**
 * Created by PhpStorm.
 * User: vishwanath.s
 * Date: 29/08/15
 * Time: 7:20 PM
 */

class GenericMessage
{
    private $message;

    public function setMessage($message)
    {
        $this->message=$message;
        return $this;
    }
} 