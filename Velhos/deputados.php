<?php
  
    error_reporting(0);
    ini_set('display_errors',0);

    $url = "http://www.camara.gov.br/SitCamaraWS/Deputados.asmx?wsdl";

    $client = new SoapClient($url,  [
        'stream_context' => stream_context_create([
            'http'=> ['accept' => 'text/xml']
            ]),
            'location' => 'http://www.camara.gov.br/',
            'encoding' => 'utf-8',
            'trace' => true,
            'user_agent' => 'PHP/SOAP'
        ]);
    print_r($client->__getFunctions());

    print_r("<hr>");

    $parameters = array('SOAPAction' => 'http://www.camara.gov.br/SitCamaraWS/Deputados/');
    $result = $client->__soapCall('ObterDeputados', $parameters);
    //$client->ObterDeputados($client->ObterDeputados, $parameters);

    //
    echo '<h2>Requisição</h2>';
    echo '<pre>'.htmlspecialchars($client->request).'</pre>';
    echo '<h2>Resposta</h2>';
    echo '<pre>'.htmlspecialchars($client->response).'</pre>';
    // Exibe mensagens para debug
    echo '<h2>Debug</h2>';
    echo '<pre>'.htmlspecialchars($client->debug_str).'</pre>';
    //

    die("FIM!");


//
//  Script Dados Abertos
//<?php
$url = 'http://www.camara.leg.br/SitCamaraWS/Deputados/ObterDeputados';
$cliente = new SoapClient($url, [
    'stream_context' => stream_context_create([
        'http'=> ['accept' => 'text/xml']
        ]),
        'location' => 'http://www.camara.gov.br/',
        'encoding' => 'utf-8',
        'trace' => true,
        'user_agent' => 'PHP/SOAP'
    ]);
$metodo = 'ObterDeputados';
$opcoes = array('location' => 'http://www.camara.leg.br/SitCamaraWS/Deputados/ObterDeputados');
$resultado = $cliente->__soapCall($metodo, $opcoes, []);
echo 'Resposta: ';
print_r($resultado);
die("FIM!");

//?>
//

//  
   error_reporting(0);
   ini_set('display_errors',0);
 

   // Inclusão do arquivo de classes NuSOAP
   require_once('nusoap-0.9.5/lib/nusoap.php');

   // Definição da localização do arquivo WSDL
   $wsdl = 'http://www.camara.leg.br/SitCamaraWS/Deputados.asmx?wsdl';
 
   // Criação de uma instância do cliente   
   $client = new nusoap_client($wsdl, false);  //default = true

   // Verificação se ocorreu erro na criação do objeto
   $err = $client->getError();
   if ($err){
      echo "Erro no construtor<pre>".$err."</pre>";
   }
   
   // Chamada do método SOAP
   $parametros = array( 'POST' => '/SitCamaraWS/Deputados.asmx',
                        'Host' => 'www.camara.leg.br',
                        'Content-Type' => 'text/xml; charset=utf-8',
                        'Content-Length'=> 'length',
                        'SOAPAction' => 'http://www.camara.gov.br/SitCamaraWS/Deputados/ObterDeputados');
   $result = $client->call('ObterDeputados', $parametros);
   
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
?>
