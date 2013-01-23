<?php

namespace Contact\Mail;

class MessageException extends \Exception {}

class Message
{
	public $subject;
    public $text_body;
    public $html_body;

    public function __construct()
	{
		$this->subject = $subject;
		$this->text_body = $text_body;
		$this->html_body = $html_body;
	}

}