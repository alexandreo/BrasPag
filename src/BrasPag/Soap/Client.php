<?php 
namespace Alexandreo\Soap;

use SoapClient;

abstract class Client extends SoapClient
{

	function __construct($wsdl = null, $options = array())
	{
		$options['user_agent'] = 'Api By Alexandreo';
		parent::__construct($wsdl, $options);
	}

}