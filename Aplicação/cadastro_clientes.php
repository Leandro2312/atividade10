<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<html>
    <head>
        <title>Cadastro de Clientes</title>
    </head>
    <body>
        <h1>Cadastro de Clientes</h1>
        <form method="post" action="inserir_cliente.php">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf" required><br>

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required><br>

            <label for="rua">Rua:</label>
            <input type="text" name="rua" id="rua" required><br>

            <label for="numero">Número:</label>
            <input type="text" name="numero" id="numero" required><br>

            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro" id="bairro" required><br>

            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" id="cidade" required><br>

            <label for="estado">Estado:</label>
            <select id="estado" name="estado">
             <?php
             $estados = array(
                    'AC' => 'Acre',
                    'AL' => 'Alagoas',
                    'AP' => 'Amapá',
                    'AM' => 'Amazonas',
                    'BA' => 'Bahia',
                    'CE' => 'Ceará',
                    'DF' => 'Distrito Federal',
                    'ES' => 'Espírito Santo',
                    'GO' => 'Goiás',
                    'MA' => 'Maranhão',
                    'MT' => 'Mato Grosso',
                    'MS' => 'Mato Grosso do Sul',
                    'MG' => 'Minas Gerais',
                    'PA' => 'Pará',
                    'PB' => 'Paraíba',
                    'PR' => 'Paraná',
                    'PE' => 'Pernambuco',
                    'PI' => 'Piauí',
                    'RJ' => 'Rio de Janeiro',
                    'RN' => 'Rio Grande do Norte',
                    'RS' => 'Rio Grande do Sul',
                    'RO' => 'Rondônia',
                    'RR' => 'Roraima',
                    'SC' => 'Santa Catarina',
                    'SP' => 'São Paulo',
                    'SE' => 'Sergipe',
                    'TO' => 'Tocantins'
                );

                foreach ($estados as $sigla => $nome) {
                    echo '<option value="' . $sigla . '">' . $nome . '</option>';
                }
                 ?>
                </select><br>

		    <label for="email">E-mail:</label>
		    <input type="email" name="email" id="email" required><br>

		    <label for="telefone">Telefone:</label>
		    <input type="text" name="telefone" id="telefone" required><br>

		    <label for="senha">Senha:</label>
		    <input type="password" name="senha" id="senha" required><br>
            <form method="post" action="upload.php" enctype="multipart/form-data">
        Selecione o arquivo: 
        <input type="file" name="arquivo">
        <br>
        <button type="submit">Enviar imagem</button>
    </form>

            <button type="submit">Enviar</button>
        </form>
    </body>
</html>