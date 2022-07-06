<?php 
        function stringURL($edoc)
        {
        try{
        echo '<a href="https://contas.tcu.gov.br/egestao/ObterDocumentoSisdoc?codPapelTramitavel='.substr(str_replace(".","",$edoc),0,8).'&seAbrirDocNoBrowser=true'.'"'.'>'.$edoc.'</a>';
        }
        catch(Exception $e)
        {
                echo 'Teste';
        }
        }

        function p($v)
        {
        $_POST[$v];    
        }        
?>