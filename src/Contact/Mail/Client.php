<?php

namespace Contact\Mail;

use \Contact\Mail;

class ClientException extends \Exception {}

class Client extends \Transmit\Client
{

	public function send(Mail $mail)
	{
		$response = $this->_post('/mail', json_encode($mail));
		return json_decode($response);
	}


}