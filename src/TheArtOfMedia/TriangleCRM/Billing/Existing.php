<?php

namespace TheArtOfMedia\TriangleCRM\Billing;
use TheArtOfMedia\TriangleCRM\Base as TBase;

class Existing extends TBase
{
	public function __contruct()
	{
		parent::__construct();
	}

	public function __set($key, $value)
	{
		$this->_params[$key] = $value;
	}
	
	public function bill()
	{
		$this->_params['username'] = $this->_apiUsername;
		$this->_params['password'] = $this->_apiPassword;

		var_dump($this->_client->ChargeExistingCustomer($this->_params));
	}
}
