<?php
		/*$arquivo = fopen ("arquivo.txt", "w");
		$linha = fgets ($arquivo);
		echo $linha . "<br>";
        //Mostra uma linha do arquivo
        while(!feof($arquivo)){        	
        //Mostra uma linha do arquivo
             echo $linha . "<br>";
			$linha = fgets ($arquivo);

      	}
       // Fecha arquivo aberto
       fclose($arquivo);*/

$file = fopen("arquivo.txt", "r");

//Output a line of the file until the end is reached
$line = fgets($file);
while(! feof($file))
{
  echo $line. "<br />";
  $line = fgets($file);
}

fclose($file);

?>