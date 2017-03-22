<?php
//

    error_reporting(0);
	ini_set('display_errors',0);

	// Inclusão do arquivo de classes NuSOAP
    require_once('nusoap-0.9.5/lib/nusoap.php');

	// Definição da localização do arquivo WSDL
	$url="http://www.camara.gov.br/SitCamaraWS/Deputados.asmx?wsdl";

  	// Criação de uma instância do cliente   
	//$oSoapClient = new SoapClient($url, false);
	$oSoapClient = new nusoap_client($url, true);

	// Verificação se ocorreu erro na criação do objeto
   	$err = $oSoapClient->getError();
   	if ($err){
      	echo "Erro no construtor<pre>".$err."</pre>";
   	}
	print_r('<hr>');

	print_r('<b>FUNÇÕES:</b><br>');
	var_dump($oSoapClient->__getFunctions());
	
	print_r('<hr>');

	// Chamada do método SOAP
   	$result = $client->call('ObterDeputados');
   

	// Esse trecho pode ser comentado quando funcionar
    echo '<h2>Requisição</h2>';
   	echo '<pre>'.htmlspecialchars($client->request).'</pre>';
   	echo '<h2>Resposta</h2>';
   	echo '<pre>'.htmlspecialchars($client->response).'</pre>';
   	// Exibe mensagens para debug
   	echo '<h2>Debug</h2>';
   	echo '<pre>'.htmlspecialchars($client->debug_str).'</pre>';
   	//

	print_r('<hr>');

	// Verifica se ocorreu falha na chamada do método   
   	if ($client->fault){
      	echo "Falha<pre>".print_R($result)."</pre>";
   	} else {
      	// verifica se ocorreu erro
      	$err = $client->getError();
      	if ($err) {
         	echo "Erro<pre>".$err."</pre>";
      	} else {
         	print_r($result);
      	}
   	}
?>
