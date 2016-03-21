<?php 
namespace Alexandreo\Soap;

use SoapClient;

abstract class Client extends SoapClient
{

	function __construct($wsdl = null, $options = array())
	{
		parent::__construct($wsdl, $options);
	}

}