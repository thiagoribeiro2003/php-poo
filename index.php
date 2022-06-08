<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 4</title>
</head>
<body>
    <h1>PHP POO - Exemplo 4</h1> 
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Acesso direto à propriedades</li>
        <li>Atribuição de dados e leitura</li>
        <li>Métodos de acesso: getters e setters</li>
    </ul>

    <?php 
    // Importando a classe
    require_once "src/Cliente.php";

    // Criação dos objetos
    $clienteA = new Cliente;
    $clienteB = new Cliente;

    // Atribuimdo dados via setters do objeto
    $clienteA->setNome("Thiago");
    $clienteA->setEmail("thiago@gmail.com");
    $clienteA->setSenha("123abc");
    $clienteB->setNome("Bernardo");
    $clienteB->setEmail("bernardo@gmail.com");
    $clienteB->setSenha("senha-facil");

    
    ?>
    

    <h2>Dados dos objetos (leitura via getters)</h2>
    
    <h3><?=$clienteA->getNome()?></h3>
    <p>E-mail: <?=$clienteA->getEmail()?></p>
    <p>Senha: <?=$clienteA->getSenha()?></p>
    
    <h3><?=$clienteB->getNome()?></h3>
    <p>E-mail: <?=$clienteB->getEmail()?></p>
    <P>Senha: <?=$clienteB->getSenha()?></P>

   
    <!-- implode transforma um array em uma string -->
    

    <!-- set colocar dados
        get pegar/ler dado -->
</body>
</html>