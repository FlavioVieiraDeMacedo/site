<?php
  $nome = $_POST['name'];
  $sobrenome = $_POST['surname'];
  $email= $_POST['email'];
  $mensagem= $_POST['message'];
  $to = "f.m.kmacedo@hotmail.com.br";
  $assunto = "Mensagem de ".$email.com
  mail($to,$assunto,$mensagem);
?>
