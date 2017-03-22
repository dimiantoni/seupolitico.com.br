<?php
    print_r("
        <html>
            <head>
                <title>Lista de deputados</title>
            </head>
            <body>
    ");
    
    print_r ("<h1>Relação de Deputados Federais</h1>");
    print_r ("<p>FONTE: Câmara dos Deputados</p>");
    
    echo "<p>Aqui você encontra a relação de Deputados Federais. </br>
             Com o auxílio do aplicativo <a url='http://www.vigieaqui.com.br/'>Vigie Aqui</a>, você pode verificar se cada político é <b>FICHA SUJA</b>, se foi condenado na <b>LAVA JATO</b> ou se teve outros problemas de <b>CORRUPÇÃO</b></p>".
             "<p>Os dados são obtidos diretamente do <i>site</i> da Câmara dos Deputados.</p>" .
             "<p>Para que esse serviço de informação funcione adequadamente, instale o plugin <a url='http://www.vigieaqui.com.br/'>Vigie Aqui</a>. Depois, é só passar o mouse sobre os nomes de Políticos destacados para ter acesso ao histórico judicial dos mesmos.</p>" .
             "<p><b>OBS.</b>: Só funciona no Google Chrome. Alguns nomes podem não ser marcados, pois a ferramenta ainda está em desenvolvimento e não conseguiu identificar corretamente.</p>";

    $deputados = simplexml_load_file("http://www.camara.gov.br/SitCamaraWS/Deputados.asmx/ObterDeputados");

    echo ("<table border='1'>" .
        "<tr>" .
            "<td>ORDEM</td>" .
            "<td>FOTO</td>" .
            "<td>UF</td>" .
            "<td>NOME</td>" .
            "<td>PARTIDO</td>" .
        "</tr>");

    $i = 1;
    foreach ($deputados->deputado as $deputado) {
        print_r("<tr>" .
                    "<td>" . $i++ . "</td>" .
                    "<td>" . "<img src='" . $deputado->urlFoto . "'>" .'</td>' .
                    "<td>" . $deputado->uf .'</td>' .
                    "<td>" . ucwords(strtolower($deputado->nomeParlamentar)) .'</td>' .
                    "<td>" . $deputado->partido .'</td>' .
                "</tr>");
    }

    print_r ("</table>");

    print_r("
            </body>
        </html>
    ");
?>
