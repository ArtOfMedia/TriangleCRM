<?php

/**
 *	This class is used to interact with the CreateProspect API for
 *	TriangleCRM.
 */
namespace TheArtOfMedia\TriangleCRM\Customer;
use TheArtOfMedia\TriangleCRM\Base as TBase;

class Create extends TBase
{
	/**
	 *	@param $productId	int	The id of the product to create the prospect ofr
	 */
	public function __construct($productId)
	{
		parent::__construct();
	}
	
	/**
	 * Saves the prospect to the TriangleCRM database.
	 *
	 * @return int	The prospects id on success or -1 on failure
	 */
	public function save()
	{
		$this->_params['username'] = $this->_apiUsername;
		$this->_params['password'] = $this->_apiPassword;
		$this->_params['productTypeID'] = $this->_productId;
		$results = $this->_client->CreateProspect($this->_params);

		if ($results->CreateProspectResult->State !== 'Success')
		{
			$this->_errorMsg = $results->CreateProspectResult->ErrorMessage;
			return -1;	
		}

		return $results->CreateProspectResult->ReturnValue->ProspectID; 
	}

	public function setFirstname($name)
	{
		$this->_params['firstName'] = $name;
	}

	public function setLastname($name)
	{
		$this->_params['lastName'] = $name;
	}

	public function setAddress($line1, $line2 = null)
	{
		$this->_params['address1'] = $line1;
		$this->_params['address2'] = $line2;
	}

	public function setCity($city)
	{
		$this->_params['city'] = $city;
	}

	public function setState($state)
	{
		$this->_params['state'] = $state;
	}

	public function setZipcode($zipcode)
	{
		$this->_params['zip'] = $zipcode;	
	}

	public function setCountry($country)
	{
		$this->_params['country'] = $country;
	}

	public function setPhoneNumber($phoneNumber)
	{
		$this->_params['phone'] = $phoneNumber;
	}
	
	public function setEmailAddress($email)
	{
		$this->_params['email'] = $email;
	}

	public function setIPAddress($ip)
	{
		$this->_params['ip'] = $ip;
	}

	public function setAffiliate($affiliate)
	{
		$this->_params['affiliate'] = $affiliate;
	}

	public function setSubAffiliate($subaffiliate)
	{
		$this->_params['subAffiliate'] = $subaffiliate;
	}

	public function setInternalId($internalId)
	{
		$this->_params['internalID'] = $internalId;
	}

	public function setCustomField1($value)
	{
		$this->_params['customField1'] = $value;
	}

	public function setCustomField2($value)
	{
		$this->_params['customField2'] = $value;
	}

	public function setCustomField3($value)
	{
		$this->_params['customField3'] = $value;
	}

	public function setCustomField4($value)
	{
		$this->_params['customField4'] = $value;
	}

	public function setCustomField5($value)
	{
		$this->_params['customField5'] = $value;
	}
}
