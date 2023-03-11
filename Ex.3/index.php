<!DOCTYPE html>
<html>
<head>
	<title>Verificação de Maioridade</title>
	<meta charset="utf-8">
</head>
<body>

	<h1>Verificação de Maioridade</h1>

	<form method="post">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome">

		<label for="idade">Idade:</label>
		<input type="number" name="idade" id="idade">

		<input type="submit" value="Verificar">
	</form>

	<?php
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
			
			$nome = $_POST["nome"];
			$idade = $_POST["idade"];

			
			if ($idade >= 18) {
				
				echo "<p>Olá $nome, você é maior de idade.</p>";
			} else {
				
				echo "<p>Olá $nome, você é menor de idade.</p>";
			}
		}
	?>

</body>
</html>