<?php

/*

Copyright (c) 2013 Hemence

*/

/* Generic exception class
 */
class Hemence_OAuthException extends Exception
{
  // pass
}

class Hemence_OAuthConsumer
{
	public $key;
	public $secret;

	function __construct($key, $secret, $callback_url=NULL) {
		$this->key = $key;
		$this->secret = $secret;
		$this->callback_url = $callback_url;
	}

	function __toString() {
		return "OAuthConsumer[key=$this->key,secret=$this->secret]";
	}
}

?>
