<?php 

    $nome = addslashes($_POST['nome']); //$nome = $_POST['nome'];
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $destino = 'johon.tst@gmail.com';
    $assunto = 'Contato Portfólio';

    $corpo_email = "Nome: ".$nome. "\n" . "E-mail: ".$email ."\n" . "Telefone: ".$telefone;

    $cabecalho = "From: johon.tst@gmail.com"."\n"."Reply-to: ".$email ."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabecalho)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o e-mail!");
    }

?> 