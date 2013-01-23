<?php

namespace Contact;

class MailException extends \Exception {}

class Mail
{
	public $id;
    public $status;
    public $created;

    public $address;
    public $message;

    public function __construct()
	{
		$this->id = 0;
		$this->status = 'new';
		$this->created = time();

		$this->address = new \Contact\Mail\Address();
		$this->message = new \Contact\Mail\Message();
	}


	public static function load($data)
	{

		if (empty($data)) {
			throw new MailException('Unable to decode json object');
		}


		$mail = new self();
		$mail->id = $data->id;
		$mail->status = $data->status;
		$mail->created = $data->created;


		$mail->address->from = $data->address->from;
		$mail->address->to = $data->address->to;
		$mail->address->reply_to = $data->address->reply_to;


		$mail->message->subject = $data->message->subject;
		$mail->message->text_body = $data->message->text_body;
		$mail->message->html_body = $data->message->html_body;


		return $mail;
	}


}