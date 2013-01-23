<?php

namespace Contact\Mail;

use \Contact\Mail\Message;

class ClientException extends \Exception {}

class Client extends \Transmit\Client
{

	public function send(Message $message)
	{
		$response = $this->_post(sprintf('/mail', json_encode($message)));
		return json_decode($response);
	}


}