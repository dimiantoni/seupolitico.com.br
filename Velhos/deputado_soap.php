<?php
//Primeira tentativa
/*
@header('Content-Type: text/html; charset=utf-8');

// Transformando o conteúdo XML da variável $string em Objeto
//$string = "livros.xml";
$string = "http://www.camara.gov.br/SitCamaraWS/Deputados.asmx/ObterDeputados";
$xml = simplexml_load_file($string);
echo ("<h1>XML: " . $xml . "</h1>");
 
// Exibe as informações do XML
//echo 'Título: ' . $xml->deputados . '<br>';
//echo 'Data de Atualização: ' . $xml->data_atualizacao . '<br>';
 
// Percorre todos os registros de vendas
foreach($xml->deputado as $deputado):
    echo 'Nome: ' . $deputado->nome . '<br>';
endforeach;
*/


/*
// PHP Proxy --- only 'GET'
// Based on script from yahoo's example @ http://developer.yahoo.com/javascript/samples/proxy/php_proxy_simple.txt
// tweaked by vk
//  hostname - just base domain
define ('HOSTNAME', 'http://www.camara.gov.br');

// Get the REST call path from the AJAX application - js;
$path = $_GET['yws_path'];

// assign yo url
$url = HOSTNAME.$path;

//Open the Curl session
$session = curl_init($url);

// Don't return HTTP headers. Do return the contents of the call
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_HTTPGET, true);

//set user agent, that did it!!! copied from browsers...
curl_setopt($session, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36');

// The web service returns XML. Set the Content-Type appropriately
header("Content-Type: text/xml");


//// verbose mode for debuging good tool!
 $fp_err = fopen('verbose_file.txt', 'ab+');
 fwrite($fp_err, date('Y-m-d H:i:s')."\n\n"); //add timestamp to theverbose log
 curl_setopt($session, CURLOPT_VERBOSE, 1);
 curl_setopt($session, CURLOPT_FAILONERROR, true);
 curl_setopt($session, CURLOPT_STDERR, $fp_err);


// Make the call
$xml = curl_exec($session);

// done, shutDown.
curl_close($session);
   die ("FIM.");
*/
//

/*

include_once "src/deputados.class.php";
include_once "src/httpconnection.class.php";

$deps = new deputados();
var_dump($deps->listaDeputados);

   die ("FIM.");
var_dump($deps->findByUF("SC"));

   die ("FIM.");

*/

//DICAS VER:
// http://stackoverflow.com/questions/23358714/php-soapclient-send-user-agent-and-accept-http-header


//

/*
$url = "http://www.camara.gov.br/SitCamaraWS/Deputados.asmx?wsdl";

$client = new SoapClient($url);
var_dump($client);exit;
-//$params->param1 = $value1;
-//$params->param2 = $value2;
-//$objectresult = $client->MyMethod($params);
$objectresult = $client->Lista_recursos();
$simpleresult = $objectresult->Lista_recursos;
print_r($simpleresult);

try {
	$x = @new SoapClient("http://www.camara.gov.br/SitCamaraWS/Deputados.asmx?wsdl");
} catch (Exception $e) {
	echo $e->getMessage();
}
var_dump($x);
   die ("FIM.");

*/   

/*
$result = file_get_contents('http://www.camara.leg.br/SitCamaraWS/Deputados.asmx/ObterDeputados');
$result = new SimpleXMLElement($result);
return $result;
    die ("FIM.");
*/

/*

$curl = curl_init('https://dadosabertos.camara.leg.br/api/v2/deputados
');
$result = curl_exec($curl);

curl_close($curl);
return $result;
    die ("FIM.");
*/

//

/*

ini_set("soap.wsdl_cache_enabled", "0");

if (!class_exists('SoapClient'))
{
    die ("Você não instalou o modulo SOAP PHP.");
} 
*/

// A seguir você devera informar a URL do webservice.
//$oSoapClient = new SoapClient("http://www.camara.gov.br/SitCamaraWS/Deputados.asmx?wsdl");
//use_soap_error_handler($handler = true);
/*
$url=" http://www.camara.leg.br/SitCamaraWS/Deputados.asmx/ObterDeputados HTTP/1.1";
$oSoapClient = new SoapClient($url, [
	'stream_context' => stream_context_create([
        'http'=> ['accept' => 'text/xml']
        ]),
		'location' => 'http://www.camara.gov.br/',
		'encoding' => 'utf-8',
		'trace' => true,
        'user_agent' => 'PHP/SOAP'
    ]);
*/
    /*
	error_reporting(0);
	ini_set('display_errors',0);
 // Inclusão do arquivo de classes NuSOAP
    require_once('nusoap-0.9.5/lib/nusoap.php');

   // Definição da localização do arquivo WSDL
   $wsdl = 'http://www.camara.leg.br/SitCamaraWS/Deputados.asmx HTTP/1.1';
   $endpoint = 'http://www.camara.gov.br/SitCamaraWS/Deputados.asmx?wsdl HTTP/1.1';

   // Criação de uma instância do cliente   
   $client = new nusoap_client($endpoint, false);

   $msg = $client->serializeEnvelope('
		<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
		  <soap:Body>
		    <ObterDeputados xmlns="http://www.camara.gov.br/SitCamaraWS/Deputados" />
		  </soap:Body>
		</soap:Envelope>
   	');

   $result = $client->send($msg, $endpoint);

   print_r('Resultado: ');
   print_r($result);

  die ("FIM.");
   */

//
  //
  	error_reporting(0);
	ini_set('display_errors',0);
 
    // Inclusão do arquivo de classes NuSOAP
      require_once('nusoap-0.9.5/lib/nusoap.php');

    // Definição da localização do arquivo WSDL
    $wsdl = 'http://www.camara.gov.br/SitCamaraWS/Deputados.asmx HTTP/1.1';
 
    // Criação de uma instância do cliente   
    $client = new nusoap_client($wsdl, false);

   // Verificação se ocorreu erro na criação do objeto
   $err = $client->getError();
   if ($err){
      echo "Erro no construtor<pre>".$err."</pre>";
   }
   
   // Chamada do método SOAP
   $result = $client->call('ObterDeputados');
   
   //
    echo '<h2>Requisição</h2>';
   echo '<pre>'.htmlspecialchars($client->request).'</pre>';
   echo '<h2>Resposta</h2>';
   echo '<pre>'.htmlspecialchars($client->response).'</pre>';
   // Exibe mensagens para debug
   echo '<h2>Debug</h2>';
   echo '<pre>'.htmlspecialchars($client->debug_str).'</pre>';
   //
   
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
   
die ("FIM.");

//
//*/
//
$url=" http://www.camara.leg.br/SitCamaraWS/Deputados/ObterDeputados";
$oSoapClient = new SoapClient($url, [
    'stream_context' => stream_context_create([
        'http'=> ['accept' => 'text/xml']
        ]),
        'location' => 'http://www.camara.gov.br/',
        'encoding' => 'utf-8',
        'trace' => true,
        'user_agent' => 'PHP/SOAP'
    ]);

echo "REQUEST:\n" . $oSoapClient->__getLastRequest() . "\n";

var_dump($oSoapClient->ObterDeputados()); 

/* 
$aOptions = array (
       "start_debug"=> "1",
       "debug_port"=> "10000",
       "debug_host"=> "localhost",
       "debug_stop"=> "1");
 
foreach($aOptions as $key => $val) {
        $oSoapClient->__setCookie($key,$val);
}
*/
//var_dump($oSoapClient->__soapCall($function));
?>
