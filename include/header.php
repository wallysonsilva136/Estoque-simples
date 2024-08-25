<?php
// inicializar sessao
session_start();

require_once ("include/config.php");
require_once ("include/connect.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Gerenciador de estoque</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <a class="navbar-brand" href="index.php">CADASTRAR PRODUTO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">
   
    </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
	    <a type="hidden" class="nav-item nav-link" href="entrada.php">ENTRADA EM ESTOQUE</a> 
      <a class="nav-item nav-link" href="saida.php">SAÍDA DE ESTOQUE</a>
      <a class="nav-item nav-link" href="cliente.php">CADASTRAR CLIENTES</a>
      <a class="nav-item nav-link" href="consulta.php">CONSULTA DE SALDO</a>
    
    </div>
  </div>
</nav>
