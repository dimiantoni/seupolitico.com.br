<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisaninweb\SoapWrapper\SoapWrapper;
use App\Soap\Request\GetConversionAmount;
use App\Soap\Response\GetConversionAmountResponse;

class SoapController extends Controller
{
	/**
	* @var SoapWrapper
	*/
	protected $soapWrapper;

	/**
	* SoapController constructor.
	*
	* @param SoapWrapper $soapWrapper
	*/
	public function __construct(SoapWrapper $soapWrapper)
	{
		$this->soapWrapper = $soapWrapper;
	}

	/**
	* Use the SoapWrapper
	*/
	public function show() 
	{
		$this->soapWrapper->add('Proposicoes', function ($service) {
			$service
			->wsdl('http://www.camara.leg.br/SitCamaraWS/Proposicoes.asmx?wsdl')
			->trace(true);
			/*->classmap([
					GetConversionAmount::class,
					GetConversionAmountResponse::class,
				]);*/
		});

	// Without classmap
		$response = $this->soapWrapper->call('Proposicoes.ListarProposicoes', [
			'sigla' => 'PL', 
			'ano'   => '2017', 
			'datApresentacaoIni'   => '2017', 
			'datApresentacaoFim'   => '2017', 
			]); 
		foreach ($response as $key => $proposicao) {
			# code...
			print_r($proposicao); echo "<br>";
		}

	// With classmap
		/*$response = $this->soapWrapper->call('Currency.GetConversionAmount', [
				new GetConversionAmount('USD', 'EUR', '2014-06-05', '1000')
			]);

		print_r($response);*/
		exit;
	}
}
