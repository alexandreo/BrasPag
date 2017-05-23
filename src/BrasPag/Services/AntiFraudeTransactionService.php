<?php
namespace Alexandreo\Services;

use Alexandreo\Contracts\Requests\FraudAnalysisTransactionDetailsContracts;
use Alexandreo\Soap\AntiFraudeClient;
use Alexandreo\Contracts\Requests\FraudAnalysisContracts;
use Alexandreo\Soap\Factories\AntiFraude\FraudAnalysisFactory;
use Alexandreo\Soap\Factories\AntiFraude\FraudAnalysisTransactionDetailsFactory;
use StdClass;
use Soapvar;


trait AntiFraudeTransactionService
{

    /**
     * @var AntiFraudeClient|null
     */
    private $brasPagAntiFraudeClient = null;

    /**
     * AntiFraudeTransactionService constructor.
     * @param bool $envProducation
     */
    function __construct($envProducation = true)
	{
		$this->brasPagAntiFraudeClient = new AntiFraudeClient([], $envProducation);
	}

    /**
     * @param FraudAnalysisContracts $fraudAnalysisContracts
     * @return mixed
     */
    public function fraudAnalysis(FraudAnalysisContracts $fraudAnalysisContracts)
    {
        $fraudAnalysisFactory = new FraudAnalysisFactory($fraudAnalysisContracts);
        $fraudAnalysisRequest = $fraudAnalysisFactory->make();
        return $this->brasPagAntiFraudeClient->fraudAnalysis($fraudAnalysisRequest);
    }

    /**
     * @param FraudAnalysisTransactionDetailsContracts $fraudAnalysisTransactionDetailsContracts
     * @return mixed
     */
    public function fraudAnalysisTransactionDetails(FraudAnalysisTransactionDetailsContracts $fraudAnalysisTransactionDetailsContracts)
    {
        $fraudAnalysisTransactionDetailsFactory = new FraudAnalysisTransactionDetailsFactory;
        $fraudAnalysisTransactionDetailsRequest = $fraudAnalysisTransactionDetailsFactory->make($fraudAnalysisTransactionDetailsContracts);

        return $this->brasPagAntiFraudeClient->fraudAnalysisTransactionDetails($fraudAnalysisTransactionDetailsRequest);
    }

}