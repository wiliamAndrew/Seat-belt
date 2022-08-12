<?php
require_DIR_.'/vendor/autoload.php';
use Kreait\Firebase\Factory;

if(isset($_POST['codigo'])){
    $factory = (new Factory()) - >withDatabaseUri('');
    $database = $factory- >creteDatabase();
    $novaPalavra = [
        'Codigo'=>$_POST['codigo'],
        'ingles' => $_POST['pingles'],
        'traducao' => $_POST['ptraducao']
    ];
    $database->getReference('Termos/'.$_POST['codigo'])- >set($novapalavra);
    $msg = 'Palavra adicionada com sucesso!';
}
?>
<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Palavras Glossário</title>
    <link href="style1.css"type="text/css" rel="stylesheet">
    </head>
    <body>
    <center><img src="" height=""></center><br><br>

    <form name="Cadastro" methad="POST">
        <div class="container">
            Código: <input type="text" name="codigo" id="codigo" value=""><br><br>
            Palavra em Inglês: <input type="text" name="pingles" size="100" id="pingles" value=""><br><br>
            Palavra em Português: <input type="text" name="ptraducao" size="100" id="ptraducao" value=""><br><br><br>
            <center>
                <input type="submit" value="Salvar">
                <a href="glossario.html"><img src="" width="100"></a>
            </center>
        </div>
    </form>
    </body>
</html>