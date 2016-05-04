<?php 
namespace Alexandreo\Soap;

use Alexandreo\Soap\Client;
use SoapFault;
use Alexandreo\Exceptions\ErrorException;

class BrasPagClient extends Client
{

	const homologacaoPagadorTransaction = 'https://homologacao.pagador.com.br/webservice/pagadorTransaction.asmx?WSDL';

	const producaoPagadorTransaction = 'https://homologacao.pagador.com.br/webservice/pagadorTransaction.asmx?WSDL';

	function __construct($options = [])
	{
        try {
            parent::__construct(self::homologacaoPagadorTransaction, [
                    'soap_version' => SOAP_1_2,
                    'cache_wsdl'   => 1,
                    "trace"        => 1
            ]);
        } catch (\Exception $e) {
             var_dump($e->getMessage());
        } catch (\SoapFault $SoapFault) {
            var_dump($this->__getLastRequest());
        }
	}

	public function __doRequest($request, $location, $action, $version, $one_way = 0) 
	{
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
