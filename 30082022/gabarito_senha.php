<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhando a senha</title>
</head>
<body>
<?php

$senha_inserida = $_POST['senha'];
$senha_correta = 'esqueciminhasenha';

if ($senha_inserida == $senha_correta) {
    echo "Parabéns, você sabe a senha!";
} else  {
    echo "Você errou";

    $filename = "senhas.txt";
    if (!file_exists("senhas.txt")){
        $handle = fopen("senhas.txt", "w");
    } else {
        $handle = fopen("senhas.txt", "a");
    }

    fwrite($handle, $senha_inserida."\n");
    fflush($handle);
    fclose($handle);

}

?>
</body>
</html>