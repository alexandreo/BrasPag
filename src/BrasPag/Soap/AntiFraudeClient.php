<?php
namespace Alexandreo\Soap;

use Alexandreo\Soap\Client;
use SoapFault;
use Exception;
use Alexandreo\Exceptions\ErrorException;

class AntiFraudeClient extends Client
{
	/**
	 * [$producaoEndPoint Url para o ambiente de produção]
	 * @var string
	 */
	private $producaoEndPoint = 'https://pagador.com.br/webservice/antifraud.asmx?WSDL';

	/**
	 * [$homologacaoEndPoint url para o ambiente de homologação]
	 * @var string
	 */
	private $homologacaoEndPoint = 'https://homologacao.braspag.com.br/AntiFraudews/antifraud.asmx?WSDL';

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


}
