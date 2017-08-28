<?php
namespace Alexandreo\Soap;

use Alexandreo\Soap\Client;
use SoapFault;
use Exception;
use Alexandreo\Exceptions\ErrorException;
use StdClass;

class AntiFraudeClient extends Client
{
	/**
	 * [$producaoEndPoint Url para o ambiente de produção]
	 * @var string
	 */
	private $producaoEndPoint = 'https://antifraude.braspag.com.br/AntiFraudeWS/AntiFraud.asmx?WSDL';

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

    public function __doRequest($request, $location, $action, $version, $one_way = 0)
    {
        return parent::__doRequest($request, $location, $action, $version, $one_way);
    }

    public function fraudAnalysis($fraudAnalysis)
    {
        $request = new StdClass;
        $request->request = (object)$fraudAnalysis;

        try {
            return parent::FraudAnalysis($request);
        } catch (SoapFault $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function fraudAnalysisTransactionDetails($fraudAnalysisTransactionDetails)
    {
        $request = new StdClass;
        $request->request = (object)$fraudAnalysisTransactionDetails;

        try {
            return parent::FraudAnalysisTransactionDetails($request);
        } catch (SoapFault $e) {
            throw new Exception($e->getMessage());
        }
    }

}
