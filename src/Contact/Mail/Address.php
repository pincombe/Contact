<?php

namespace Contact\Mail;

class AddressException extends \Exception {}

class Address
{
    public $from;
    public $to;
    public $reply_to;

    public function __construct()
	{
		$this->from = $from;
		$this->to = $to;
		$this->reply_to = $reply_to;
	}
}