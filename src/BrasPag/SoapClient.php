<?php 
namespace Alexandreo;

abstract class SoapClient extends \SoapClient
{

	function __construct($wsdl = null, $options = array())
	{
		parent::__construct($wsdl, $options);
	}

}