<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>
    <h1>PHP POO - Exemplo 5</h1> 
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Herança</li>
        <li>Classe Abstrata (não pode ser instanciada)</li>
        <li>Classe Final</li>
        <li>Métodos/propriedades protegidos (acessíveis apenas pelas subclasses)</li>
    </ul>

    <?php 
    // Importando a classe
    require_once "src/PessoaFisica.php"; // subclasse
  //  require_once "src/PessoaJuridica.php"; //subclasse
    require_once "src/MEI.php"; // subclasse
    
    $clientePF = new PessoaFisica;
    $clientePF->setNome('Thiago');
    $clientePF->setEmail('thiago@gmail.com');
    $clientePF->setSenha('123456');
    $clientePF->setCpf('123.456.789-00');
    $clientePF->setIdade(30);


    $clientePJ = new PessoaJuridica;
    $clientePJ->setNome('Thiago');
    $clientePJ->setCnpj('123.456.789');
    $clientePJ->setAnoFundacao(2009);
    $clientePJ->setNomeFantasia('Empresa Genérica');

    $clienteMEI = new MEI;
    $clienteMEI->setNome("James Hetfield");
    $clienteMEI->setNomeFantasia("Metallica");
    $clienteMEI->setCnpj("12.055.0001/000-42");
    $clienteMEI->setAreaDeAtuacao("Música");


    ?>
    
    <pre> <?=var_dump($clientePF)?> </pre>
    <pre> <?=var_dump($clientePJ)?> </pre>
    <pre> <?=var_dump($clienteMEI)?> </pre>


    <!-- implode transforma um array em uma string -->
    

    <!-- set colocar dados
        get pegar/ler dado -->

        <?php $cliente = new Cliente; //Erro pois cliente é abstrato ?>
        <pre><?=var_dump($cliente)?></pre>
</body>
</html>