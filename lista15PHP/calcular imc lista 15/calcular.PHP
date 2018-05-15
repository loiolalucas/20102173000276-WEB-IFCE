<?php
		$massa = $_POST["massa"];
		$altura = $_POST["altura"];
		$imc = $massa/$altura*$altura;
		
		
if($imc < 16) {
		echo "MAGREZA GRAVE";
}else if(($imc >= 16) and ($imc < 17)) {
		echo "MAGREZA MODERADA";
}else if(($imc >= 17) and ($imc < 18.5)) {
		echo "MAGREZA LEVE";
}else if(($imc >= 18.5) and ($imc < 25)) {
		echo "SALDAVEL";
}else if(($imc >= 25) and ($imc < 30)) {
		echo "SOBREPRESO";
}else 
 		echo "OBESIDADE";

?>
