<?php


if(isset($_POST['email']) && !empty($_POST['email'])){


$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$mensagens = addcslashes($_POST['mensagem']);

$to = "gc.assuntosrapidos@gmqail.com"; //$to_rede73
$subject = "teste - Formulario_html_css_php"; //$subject_assunto


$body = "Nome:  ".$nome.  "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagens;


$header = "From:seu endereço de email"."\r\n".
            "Reply-to:".$email."\r\n".
            "X-Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("Erro ao enviar o email");
}

}

?>
