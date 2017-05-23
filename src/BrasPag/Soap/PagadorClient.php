<?php
namespace Alexandreo\Soap;

use Alexandreo\Soap\Client;
use SoapFault;
use Exception;
use Alexandreo\Exceptions\ErrorException;

class PagadorClient extends Client
{
	/**
	 * [$producaoEndPoint Url para o ambiente de produção]
	 * @var string
	 */
	private $producaoEndPoint = 'https://pagador.com.br/webservice/pagadorTransaction.asmx?WSDL';

	/**
	 * [$homologacaoEndPoint url para o ambiente de homologação]
	 * @var string
	 */
	private $homologacaoEndPoint = 'https://homologacao.pagador.com.br/webservice/pagadorTransaction.asmx?WSDL';

	function __construct($options = [], $envProducation = true)
	{
        try {
            parent::__construct(($envProducation ? $this->producaoEndPoint : $this->homologacaoEndPoint ), [
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
		if (strripos($action, 'AuthorizeTransaction') !== false){//fix error brasgpag soap
			$request = str_replace('xsi:type="true"', 'xsi:nil="true"', $request);
			$request = str_replace('ns1:', '', $request);
			$request = str_replace('xmlns:ns1="https://www.pagador.com.br/webservice/pagador"', '', $request);
			$request = str_replace('<AuthorizeTransaction>', '<AuthorizeTransaction xmlns="https://www.pagador.com.br/webservice/pagador">', $request);
		}
		return parent::__doRequest($request, $location, $action, $version, $one_way);
	}

	/**
	 * [authorizeTransaction description]
	 * @param  [type] $authorizeTransaction [description]
	 * @return [type]                       [description]
	 */
	public function authorizeTransaction($authorizeTransaction)
	{
		try {
			return parent::AuthorizeTransaction($authorizeTransaction);
		} catch (SoapFault $e) {
			throw new Exception($e->getMessage());
		}
	}

	/**
	 * [captureCreditCardTransaction description]
	 * @param  [type] $captureCreditCardTransaction [description]
	 * @return [type]                               [description]
	 */
	public function captureCreditCardTransaction($captureCreditCardTransaction)
	{
		try {
			return parent::CaptureCreditCardTransaction($captureCreditCardTransaction);
		} catch (SoapFault $e) {
			throw new Exception($e->getMessage());
		}
	}

	/**
	 * [refundCreditCardTransaction description]
	 * @param  [type] $refundCreditCardTransaction [description]
	 * @return [type]                              [description]
	 */
	public function refundCreditCardTransaction($refundCreditCardTransaction)
	{
		try {
			return parent::RefundCreditCardTransaction($refundCreditCardTransaction);
		} catch (SoapFault $e) {
			throw new Exception($e->getMessage());
		}
	}

	/**
	 * [voidCreditCardTransaction description]
	 * @param  [type] $voidCreditCardTransaction [description]
	 * @return [type]                            [description]
	 */
	public function voidCreditCardTransaction($voidCreditCardTransaction)
	{
		try {
			return parent::VoidCreditCardTransaction($voidCreditCardTransaction);
		} catch (SoapFault $e) {
			throw new Exception($e->getMessage());
		}
	}

}
