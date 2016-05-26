<?php 
namespace Alexandreo\Soap;

use Alexandreo\Soap\Client;
use SoapFault;
use Exception;
use Alexandreo\Exceptions\ErrorException;

class BrasPagClient extends Client
{

	function __construct($options = [])
	{
        try {
            parent::__construct(BRASPAG_ENDPOINT, [
                    'soap_version' => SOAP_1_2,
                    'cache_wsdl'   => 1,
                    "trace"        => 1
            ]);
        } catch (\Exception $e) {
             throw new Exception($e->getMessage());
        } catch (\SoapFault $SoapFault) {
            throw new Exception($e->getMessage());
        }
	}

	public function __doRequest($request, $location, $action, $version, $one_way = 0) 
	{
		//fix error brasgpag soap
		$request = str_replace('xsi:type="true"', 'xsi:nil="true"', $request);
		$request = str_replace('ns1:', '', $request);
		$request = str_replace('xmlns:ns1="https://www.pagador.com.br/webservice/pagador"', '', $request);
		$request = str_replace('<AuthorizeTransaction>', '<AuthorizeTransaction xmlns="https://www.pagador.com.br/webservice/pagador">', $request);
		return parent::__doRequest($request, $location, $action, $version, $one_way);
	}
	
	public function authorizeTransaction($authorizeTransaction)
	{
		try {
			return parent::AuthorizeTransaction($authorizeTransaction);
		} catch (SoapFault $e) {
			throw new Exception($e->getMessage());
		}
	}

}
