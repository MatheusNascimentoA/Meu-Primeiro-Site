<?php

ini_set('default_charset', 'UTF-8');

$to = "teste.email@teste.com";

$subject = "ORÇAMENTO DO SITE";


$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$assunto = $_POST['assunto'];
$projeto = $_POST['projeto'];


$body = "Nome: $nome <br> 
Email: $email <br>
Telefone: $telefone <br>
Cidade: $cidade <br>
Uf: $uf <br>
Assunto: $assunto <br> 
Projeto: $projeto <br>";



$headers = "Content-type: text/html; charset=UTF8 \r\n";

$headers .= "From: <site@isosert.com.br>\r\n";

$headers .= "Reply-To: site@isosert.com.br\r\n";

$headers .= "Return-path: site@isosert.com.br";





mail($to, $subject, $body, $headers);





echo "<script type='text/javascript'> alert('Contato enviado com sucesso!.'); window.location='contato.php'; </script>";
