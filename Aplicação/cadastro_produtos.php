<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<html>
    <head>
        <title>Cadastro de Clientes</title>
    </head>
    <body>
        <h1>Cadastro de Produtos</h1>
        <form method="post" action="inserir_cliente.php">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required><br>

            <label for="categoria_produto">categoria do produto:</label>
            <input type="text" name="categoria_produtos"  required><br>

            <label for="quantidade">Quantidade:</label>
            <input type="text" name="quantidade" id="quantidade" required><br>

            <label for="numero">Número:</label>
            <input type="text" name="numero" id="numero" required><br>

            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro" id="bairro" required><br>
 <input type="password" name="senha" id="senha" required><br>

            <button type="submit">Enviar</button>
        </form>
    </body>
</html>