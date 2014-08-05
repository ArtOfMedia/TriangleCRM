<?php

namespace TheArtOfMedia\TriangleCRM\Customer;
use TheArtOfMedia\TriangleCRM\Base as TBase;

class Details extends TBase
{
	protected $_shipping = [];
	protected $_billing = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function getDetails($prospectID)
    {
		$this->_params = [
			'username' => $this->_apiUsername,
			'password' => $this->_apiPassword,
			'prospectID' => $prospectID,
		];

        $results = $this->_client->GetCustomerDetail($this->_params); 
		
		if ($results->GetCustomerDetailResult->State == 'Success')
		{
			$this->_shipping = $results->GetCustomerDetailResult->ReturnValue->UserInfo->Shipping;
			$this->_billing = $results->GetCustomerDetailResult->ReturnValue->UserInfo->Billing;
			return true;
		}

		$this->_errorMsg = $results->GetCustomerDetailResult->ErrorMessage;
		return false;
    }

	public function getShippingInformation()
	{
		return $this->_shipping;
	}

	public function getBillingInformation()
	{
		return $this->_billing;
	}
}
