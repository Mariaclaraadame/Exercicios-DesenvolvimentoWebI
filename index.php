<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Meu primeiro programa</title>
	</head>
	<body>
		<?php
			echo "Olá, mundo!";
			echo "<BR>";
			$potencia= pow(2,3);
			$raiz= sqrt(2);
			$round= round(1.5);
			$round1= round(1.4);
			$round2= round(1.3);
			$floor= floor(1.5);
			$floor1= floor(1.4);
			$floor2= floor(1.3);
			echo "<BR>";
			echo "Teste dos operadores aritméticos";
			echo "<BR>";
			echo "<BR>";
			echo "A potência de 2 elevado a 3 é: $potencia";
			echo "<BR>";
			echo "A raiz de 2 é: $raiz";
			echo "<BR>";
			echo "O arredondamento de 1,5 é: $round";
			echo "<BR>";
			echo "O arredondamento de 1,4 é: $round1";
			echo "<BR>";
			echo "O arredondamento de 1,3 é: $round2";
			echo "<BR>";
			echo "O arredondamento para baixo de 1,5 é: $floor";
			echo "<BR>";
			echo "O arredondamento para baixo de 1,4 é: $floor1";
			echo "<BR>";
			echo "O arredondamento para baixo de 1,3 é: $floor2";
		?>
	</body>
</html>