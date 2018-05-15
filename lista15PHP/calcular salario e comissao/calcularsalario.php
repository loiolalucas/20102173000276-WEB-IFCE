<?php
		$sfixo = $_POST["sfixo"];
		$valorvendas = $_POST["valorvendas"];
		$comissao = $valorvendas * 0.04;
		$salariofinal = $sfixo + $comissao;

		echo "a comissao e" .$comissao;
		echo "o salario final e " .$salariofinal ;
?>