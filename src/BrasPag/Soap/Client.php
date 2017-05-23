<?php 
namespace Alexandreo\Soap;

use SoapClient;

abstract class Client extends SoapClient
{

	/**
	 * [$xmlRequest XML do ação que está sendo enviado para a braspag]
	 * @var string
	 */
	public $xmlRequest = null;

	/**
	 * [$xmlReponse XMl que á braspag está retornando]
	 * @var string
	 */
	public $xmlReponse = null;


	function __construct($wsdl = null, $options = array())
	{
		$options['user_agent'] = 'Api By Alexandreo';
		parent::__construct($wsdl, $options);
	}

	public function __doRequest($request, $location, $action, $version, $one_way = 0)
	{
		//set request...
		$this->xmlRequest = $request;
		try {
            $response = parent::__doRequest($request, $location, $action, $version, $one_way);
        } catch(\Exception $e) {
            throw $e;
        }
		//set reponse...
		$this->xmlReponse = $response;
        return $response;
	}

}