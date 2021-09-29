<?php
    require_once "function.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  if (!isset($aluno)) {
    $aluno = array();
    $aluno['id'] = 0;
    $aluno['nome'] = "";
    $aluno['email'] = "";
    $aluno['curso'] = "";
    $aluno['situacao'] = "";
    $aluno['ano_semestre_ingresso'] = "";
 
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="./css/frm.css">
</head>
<body>
    
<!-- <div id="Contato" class="element" style="display: none;"> -->
  <form action="addStudent.php" method="post">

    <h3>Cadastrar Novo Aluno</h3>
    <input type="text" name="nome" placeholder="Nome Completo" required>
    <input type="email" name="email" placeholder="E-mail" required>
    <input type="text" name="curso" placeholder="Curso" required>
    <input type="text" name="situacao" placeholder="Situação (Ex: Cursando)" required>
    <input type="text" name="ano_semestre_ingresso" placeholder="Ano e Semestre de Ingresso (Ex: 2020.1)" required>
    <input type="submit" name="acao" value="Enviar">

  </form>
</div>
</body>
</html>