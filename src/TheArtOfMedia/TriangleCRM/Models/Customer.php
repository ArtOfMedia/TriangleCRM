<?php

namespace TheArtOfMedia\TriangleCRM\Models;
use TheArtOfMedia\TriangleCRM\Models\Base as TBase;

class Customer extends TBase
{
	protected $table = 'customers';
	protected $values = [];

	public function __construct()
	{
		parent::__construct();
	}
}
