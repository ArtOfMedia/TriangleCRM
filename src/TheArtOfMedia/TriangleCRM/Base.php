<?php
namespace TheArtOfMedia\TriangleCRM;

class Base
{
	private $_client;
	private $_apiUsername = '';
	private $_apiPassword = '';
	private $_productId = null;
	private $_params = [];
	private $_errorMsg = '';

	public function __construct($productId)
	{
		$this->_client = new SoapClient("https://krc5.trianglecrm.com/api/2.0/billing_ws.asmx?WSDL");
		$this->_productId = $productId;
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
