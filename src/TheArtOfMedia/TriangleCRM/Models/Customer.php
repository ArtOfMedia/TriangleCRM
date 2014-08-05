<?php

namespace TheArtOfMedia\TriangleCRM\Models;
use TheArtOfMedia\TriangleCRM\Models\Base as TBase;

class Customer extends TBase
{
	private $_values = [];

	public function __set($key, $value)
	{
		$this->_values[$key] = $value;
		return $this;
	}

	public function __construct()
	{
		parent::__construct();
	}

	public function save()
	{
		$customer = \ORM::for_table('customers')->create();
		
		foreach ($this->_values as $key => $value)
		{
			$customer->$key = $value;
		}

		$customer->save();
	}
}
