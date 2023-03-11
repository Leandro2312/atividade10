<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de taboadas</title>
</head>
<body>
    <h1>Gerador de taboadas</h1>

    <form method="post">
		Digite um número: <input type="number" name="numero"><br>
		<input type="submit" value="Gerar tabuada">
	</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];
    echo "<h2>Tabuada do $numero:</h2>";
    for ($i=1; $i<=10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado<br>";
    }
}

?>
</body>
</html>