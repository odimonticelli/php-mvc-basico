<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    
    <h1>Exemplo 01 - Conexão com banco de dados</h1>
    <h3>Uso "normal" dos recursos da linguagem para listar dados</h3>

    <?php
    //dados para conexao
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $base = 'javatender';
    $link = "mysql:dbname=$base";

    //forma procedural (usando funções)
    $cnx = mysqli_connect($host, $user, $pass, $base);
    $res = mysqli_query($cnx, "select * from usuario");
    

    //outra forma orientada a objetos
    /*
    $cnx = new PDO($link, $user, $pass);
    $res = $cnx->query("select * from usuario");
    */

    //mostra os dados
    foreach ($res as $vet) {
        $nom = $vet['nome'];
        $ema = $vet['email'];
        echo "$nom - $ema <br>";
    }
    ?>

</body>
</html>