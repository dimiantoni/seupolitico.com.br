<?php
  
    //error_reporting(0);
    //ini_set('display_errors',0);

    $url = "http://www.camara.gov.br/SitCamaraWS/Deputados.asmx?WSDL";

    $oSoapClient = new SoapClient($url,  [
        'stream_context' => stream_context_create([
            'http'=> ['accept' => 'text/xml']
            ]),
            'location' => 'http://www.camara.leg.br/',
            'encoding' => 'utf-8',
            'trace' => true,
            'user_agent' => 'PHP/SOAP'
        ]);

    print_r("<hr>");

    print_r('<b>FUNÇÕES</b>:<br>');
    print_r($oSoapClient->__getFunctions());

    print_r("<hr>");

    try {
        $function = 'ObterDeputados';
        $options = array('location' => 'http://www.camara.gov.br/SitCamaraWS/Deputados/ObterDeputados');
        $result = $oSoapClient->__soapCall($function, array($options));
        var_dump($result); // está retornando NULL
    } catch (SoapFault $fault) {
        print_r('Deu erro!<br><br>');
        print_r($fault . '<br><br>');
        echo $oSoapClient->__getLastRequestHeaders();

    }
    //var_dump($result); // está retornando NULL

    print_r("<hr>");

    die("FIM!");
?>
