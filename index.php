<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 6 - Polimorfismo</title>
</head>
<body>
    <h1>PHP POO - Exemplo 6</h1> 
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Polimorfismo</li>
        
    </ul>

    <?php 
    // Importando a classe
    require_once "src/PessoaFisica.php"; // subclasse
    require_once "src/PessoaJuridica.php"; //subclasse
    
    
    $clientePF = new PessoaFisica;
    $clientePF->setNome('Thiago');
    $clientePF->setEmail('thiago@gmail.com');
    $clientePF->setSenha('123456');
    $clientePF->setCpf('123.456.789-00');
    $clientePF->setIdade(30);


    $clientePJ = new PessoaJuridica;
    $clientePJ->setNome('Jon Oliva');
    $clientePJ->setCnpj('123.456.789');
    $clientePJ->setAnoFundacao(2009);

    ?>

    <h3>Pessoa Física</h3>
    <p> <?=$clientePF->getNome()?></p>
    
    <h3>Pessoa Juridica</h3>
    <p> <?=$clientePJ->getNome()?></p>

    <hr>
    <section><?=$clientePF->exibirDados()?></section>
    <section><?=$clientePJ->exibirDados()?></section>
    
    <pre> <?=var_dump($clientePF)?> </pre>
    <pre> <?=var_dump($clientePJ)?> </pre>


    <!-- implode transforma um array em uma string -->
    

    <!-- set colocar dados
        get pegar/ler dado -->

</body>
</html>