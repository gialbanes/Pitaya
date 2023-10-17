<?php
include("../models/conexao.php");
$diretorio = "../views/arquivos/";
$nomeUser = $_POST["nomeUser"];
$emailUser = $_POST["emailUser"];
$senhaUser += $_POST["senhaUser"];

mysqli_query($conexao, "INSERT INTO usuario (usuario_nome, usuario_email, usuario_senha) values ('$nomeUser', '$emailUser', '$senhaUser')");; 
$id_user = mysqli_insert_id($conexao);

header("location:../views/post.php"); //te manda pra index novamente

?>