<?php 
        include 'cfunctions.php';
        include 'db.php';
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Instrução 44/2018</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

    </head>
    <body>
        <h2>Assunto: atestação de nota fiscal para pagamento</h2>

        Periodo 1	<?php echo p("periodo1");?> <br>
        Periodo 2	<?php echo p("periodo2");?><br>
        Periodo 3	<?php echo p("periodo3");?><br>
        Relatório Comissão Recebimento	<?php echo p("etcurelcomissao");?><br>
        Relatório Sicaf	<?php echo p("etcusicaf");?><br>
        TRD Fiscal 1	<?php echo p("trdfiscal1");?><br>
        TRD Fiscal 2	<?php echo p("trdfiscal2");?><br>


        <ol type="1">
        <li>Trata-se do pagamento das notas fiscais referentes à prestação de serviços de projeto e 
            manutenção de software com práticas ágeis, objeto do Contrato 44/2018.</li>
        <li>As notas fiscais referentes à prestação dos serviços de projeto e manutenção de software 
            com práticas ágeis encontram-se nos documentos a seguir, com suas respectivas informações:</li>
            <br>
            <?php Query("select * from tbnf where idperiodo>".$_POST["periodo1"]);?>
        <li>Relatório da comissão atestando recebimento dos serviços encontra-se no documento <?php stringURL(p("etcurelcomissao"))?>
        .</li>
        <li>Relatórios com as documentações trabalhistas e previdenciárias, assim como os 
            comprovantes de recolhimento das contribuições previdenciárias do período, serão tratados no sistema 
            Áurea. </li>
        <li>Informa-se que a certidão de regularidade fiscal (SICAF) encontra-se no documento <?php echo p("etcusicaf");?>. </li>
        <li>Informa-se que os documentos de acompanhamento (ordens de serviço, aditivos às ordens 
            de serviço e termos de recebimento definitivos) foram juntados no processo 005.304/2021-0.</li>
        <li>Os termos de recebimento definitivo referentes às ordens de serviço do tipo manutenção, 
            constam abaixo, com suas respectivas informações:</li>
        <li>Os termos de recebimento definitivo referentes às ordens de serviço do tipo projeto do 
            período de 20/03/2021 a 19/05/2021, constam abaixo, com suas respectivas informações:</li>
        <li>Os termos de recebimento definitivos com as informações de responsabilidade dos fiscais de 
            contrato e da empresa constam nos documentos: #[trdfiscal1] e #[trdfiscal2]. </li>
        <li>Memória de cálculo dos valores a serem pagos constam abaixo:</li>
        <li>Desse modo, os valores a serem pagos para a empresa referentes aos serviços prestados no 
            período devem ser: </li>
        <li>Diante do exposto, encaminham-se os autos ao SGP/Dipat, para o registro patrimonial das 
            ordens de serviço (OS) do tipo projeto constantes da tabela do item 8 e depois ao SPF/DIPEX para 
            pagamento.</li>
        </ol>

        <p>STI, 16 de Março de 2022</p>
        <br>
        <p>Datam e assinam eletronicamente este documento</p>
        <p>Fabiana Ruas Vieira – Secretária da STI</p> 
        <p>Fernando Marinho do Nascimento – Fiscal do contrato</p>
        <p>Lazaro Benicio de Almeida – Fiscal substituto do contrato</p>
    </body>
</html>
