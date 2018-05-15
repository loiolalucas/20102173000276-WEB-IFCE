<?php
    //pega os dados enviados pelo formulario
	    $nome01 = $_POST["nome01"];
		  $nome02 = $_POST["nome02"];
		  $nome02 = $_POST["nome03"];
		  $nome04 = $_POST["nome04"];
		  $nome05 = $_POST["nome05"];
   
    //prepara o conteudo a ser gravado
		  $conteudo = $nome01, $nome02, $nome03, $nome04, $nome05;
    
    //arquivo  txt
		$arquivo = fopen ("arquivocinconomes.txt", "r");
		
    //tenta abrir o arquivo txt
		if (!$abrir = fopen($arquivo, "a")) {
         echo "Erro abrindo arquivo ($arquivo)";
       exit;
    }

    //escreve no arquivo txt
     if (!fwrite($abrir, $conteudo)) {
      print "Erro escrevendo no arquivo ($arquivo)";
      exit;
    }

    echo "Arquivo gravado com Sucesso !!";

    //FECHA O ARQUIVO 
    fclose($abrir); 
?>
