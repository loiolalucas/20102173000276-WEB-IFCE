<?php
		$nomeAluno = $_POST["nomeAluno"];
		$disciplina = $_POST["disciplina"];
		$nota01 = $_POST["nota01"];
		$nota02 = $_POST["nota02"];
		$nota03 = $_POST["nota03"];

		echo "O nome do aluno é:" . $nomeAluno . "<br>";
		echo "A disciplina é:" . $disciplina . "<br>";
		echo "As notas do aluno são: nota01:" . $nota01 . "nota02:" . $nota02 . "nota03:" . $nota03;

		$media=($nota01+$nota02+$nota03)/3;

		echo "E a media e:" . $media; 


?>
