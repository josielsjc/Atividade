<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Profissões sem POO</title>
</head>
<body>
    
<?php

 $var_tipo= $_POST['frm_tipo'];    

 $var_periodo= $_POST['frm_periodo'];    



function work(string $var_tipo, string $var_periodo)
{


    switch ($var_tipo) {

        case 'dancer':
            $mensagem = "Sou um dançarino e "
                . "gostaria de programar, mas tenho coisas mais importantes para fazer!\n";

            $mensagem .= $var_periodo== 'day'
                ? 'É dia: Estou dançando!'
                : 'É noite: Não me amole... estou dormindo!';
            break;

        case 'developer':
            $mensagem = "Sou um candango que programa e "
                . "não tenho vida...\n";

            $mensagem .= $var_periodo== 'day'
                ? 'É dia: Estou programando agora!'
                : 'É noite: Eu nunca paro de programar!';
            break;

        case 'player':
            $mensagem = "Sou um jogador de LOL e "
                . "não programo, pois meu é papel é jogar joguinho!\n";

            $mensagem .= $var_periodo == 'day'
                ? 'É dia: Estou trabalhando agora!'
                : 'É noite: Estou jogando agora!';
            break;
    }

    return $mensagem;
}
echo work($var_tipo,$var_periodo);
?>

</body>
</html>

