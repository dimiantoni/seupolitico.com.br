<?php 
	$url="http://www.camara.gov.br/SitCamaraWS/Deputados.asmx?wsdl"; 
	$oSoapClient = new SoapClient($url, [ 'stream_context' => stream_context_create([ 'http'=> ['accept' => 'text/xml'] ]), 'location' => 'http://www.camara.gov.br/', 'encoding' => 'utf-8', 'trace' => true, 'user_agent' => 'PHP/SOAP' ]); 
?>