<?php
namespace Alexandreo\Services;

use Alexandreo\Soap\AntiFraudeClient;
use Alexandreo\Contracts\Requests\FraudAnalysisContracts;
use Alexandreo\Soap\Factories\AntiFraude\FraudAnalysisFactory;
use StdClass;
use Soapvar;


trait AntiFraudeTransactionService
{

	private $brasPagAntiFraudeClient = null;

	function __construct($envProducation = true)
	{
		$this->brasPagAntiFraudeClient = new AntiFraudeClient([], $envProducation);
	}

	public function fraudAnalysis(FraudAnalysisContracts $fraudAnalysisContracts)
    {
        $fraudAnalysisFactory = new FraudAnalysisFactory($fraudAnalysisContracts);
        $fraudAnalysisRequest = $fraudAnalysisFactory->make();
        $fraudAnalysisResponse = $this->brasPagAntiFraudeClient->fraudAnalysis($fraudAnalysisRequest);
        dd($fraudAnalysisResponse);
    }

}