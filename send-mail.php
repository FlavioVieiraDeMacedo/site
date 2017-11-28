<?php
  $nome = $_POST['nome'];
  $email= $_POST['email'];
  $mensagem= $_POST['mensagem'];
  $to = "f.m.kmacedo@hotmail.com.br";
  $assunto = "Mensagem de ".$email.com
  mail($to,$assunto,$mensagem);
?>
