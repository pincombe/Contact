<?php

namespace Contact\Mail;

class MessageException extends \Exception {}

class Message
{
    public $from;
    public $to;
    public $subject;
    public $body;

    public $reply_to;

    public function __construct($from, $to, $subject, $body)
	{
		$this->from = $from;
		$this->to = $to;
		$this->subject = $subject;
		$this->body = $body;
	}

	public function setReplyTo($reply_to)
	{
		$this->reply_to = $reply_to;
	}


}