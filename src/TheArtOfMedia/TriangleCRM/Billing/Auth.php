<?php

namespace TheArtOfMedia\TriangleCRM\Billing;
use TheArtOfMedia\TriangleCRM\Base as TBase;

class Auth extends TBase
{
	public function __contruct()
	{
		parent::__construct();
	}

	public function __set($key, $value)
	{
		$this->_params[$key] = $value;
	}
	
	public function auth()
	{
		$this->_params['username'] = $this->_apiUsername;
		$this->_params['password'] = $this->_apiPassword;

		return $this->_client->AuthOnly($this->_params);
	}
}
