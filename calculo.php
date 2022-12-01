<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="POST"> 
	Número 1 <input type="number" name="n1"> <br>
	Número 2 <input type="number" name="n2"> <br>
	Operacao:
		<select name = "operacao">
		<option value="somar">Somar</option>
		<option value="subtracao">Subtrair</option>
		<option value="multiplicar">Multiplicar</option>
		<option value="dividir" selected >Dividir</option>
	</select>
	<input type="submit" name="enviar" >
</form>
<?php
	if (isset($_POST['enviar'])){
			$numero1 = $_POST['n1'];
			$numero2 = $_POST['n2'];
	}
	if (!empty($numero1) && !empty($numero2)){
		if (is_numeric($numero1) && is_numeric($numero2)){
			$op= $_POST['operacao'];
			$resultado = 0;
			if ($op =="somar")
				$resultado = $numero1 + $numero2;
			else if ($op =="subtracao")
				$resultado = $numero1 - $numero2;
			else if ($op =="dividir")
				$resultado = $numero1 / $numero2;
			else if ($op =="multiplicar")
				$resultado = $numero1 * $numero2;
			echo ($resultado);
	}else{
		echo("apenas numeros permitidos");
	}
	}
	
	?>
</body>
</html>
