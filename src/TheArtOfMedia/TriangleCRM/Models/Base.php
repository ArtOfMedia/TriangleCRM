<?php

namespace TheArtOfMedia\TriangleCRM\Models;

class Base
{
	public function __construct()
	{
		\ORM::configure([
			'connection_string' => 'mysql:host=localhost;dbname=crm',
			'username' => 'root',
			'password' => '0mgbbq!12'
		]);
	}
}
