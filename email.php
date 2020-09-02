<?php

if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome= addslashes($_POST['nome']);
    $telefone= addslashes($_POST['telefone']);
    $email= addslashes($_POST['email']);
    $mensagem= addslashes($_POST['mensagem']);

    $mail_to = "alefdav@gmail.com";
    $mail_subjet = "Contato - ADRC";
    $mail_body = "Nome: ".$nome. "\n".
            "Telefone: ".$telefone. "\n".
            "Email: ".$email. "\n".
            "Mensagem: ".$mensagem;

    $header = 'MIME-Version: 1.0 /r/n'
    . 'From:alefdav@gmail.com'. '/r/n' . 'Reply-to:' . $mail . '/r/n';


    if(mail($mail_to,$mail_subjet,$mail_body,$header)){
        echo  ("<script>alert('Email enviado com Sucesso!');</script>");
    } else{
        echo  ("<script>alert('Email não pode ser enviado, preencha todos os dados');</script>");
    }

} else {
    echo  ("<script>alert('Email não pode ser enviado, preencha todos os dados');</script>");
}




?>