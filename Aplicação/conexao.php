<?php

$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'cadastro_cliente';



try {
    $conexao = mysqli_connect($host, $user, $pass, $db);

} catch(Exception $e) {
    echo "Erro na conexão";
    exit();
}