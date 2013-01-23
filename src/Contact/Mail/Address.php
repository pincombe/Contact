<?php

namespace Contact\Mail;

class AddressException extends \Exception {}

class Address
{
    public $from;
    public $to;
    public $reply_to;

    public function __construct($from = '', $to = '', $reply_to = '')
	{
		$this->from = $from;
		$this->to = $to;
		$this->reply_to = $reply_to;
	}

    public function getFrom()
    {
	    return self::parseAddressList($this->from);
    }

    public function getRecipients()
    {
	    return self::parseAddressList($this->recipients);
    }

    public function getReplyTo()
    {
	    return self::parseAddressList($this->reply_to);
    }


    public static function parseAddressList($address_list)
    {
		$emails = array();

		if(preg_match_all('/\s*"?([^><,"]+)"?\s*((?:<[^><,]+>)?)\s*/', $address_list, $matches, PREG_SET_ORDER) > 0)
		{
		    foreach($matches as $m)
		    {
		        if(! empty($m[2]))
		        {
		            $emails[trim($m[2], '<>')] = $m[1];
		        }
		        else
		        {
		            $emails[$m[1]] = '';
		        }
		    }
		}

		return $emails;
    }

}