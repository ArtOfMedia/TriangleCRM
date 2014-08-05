<?php
namespace TheArtOfMedia\TriangleCRM;

class Base
{
	protected $_client;
	protected $_apiUsername = 'krc51403';
	protected $_apiPassword = '1UFKjGr3zq';
	protected $_productId = null;
	protected $_params = [];
	protected $_errorMsg = '';

	public function __construct()
	{
		$this->_client = new \SoapClient("https://krc5.trianglecrm.com/api/2.0/billing_ws.asmx?WSDL");
	}

	public function hasError()
	{
		return (strlen($this->_errorMsg) > 0) ? true : false;
	}

	public function error()
	{
		return $this->_errorMsg;
	}
}
