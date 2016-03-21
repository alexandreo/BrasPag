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
		parent::__construct(self::homologacaoPagadorTransaction, $options);
	}

	public function __doRequest($request, $location, $action, $version, $one_way = 0) {
		echo $request;
		exit;
		return $request;
	}

	public function AuthorizeTransaction($authorizeTransaction)
	{
		try {
			return parent::AuthorizeTransaction($authorizeTransaction);
		} catch (SoapFault $e) {
			throw new ErrorException('Inválid Request XML.');
		}
	}

}
