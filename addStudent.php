<?php
    require_once "function.php";
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $aluno = array();
    $aluno['nome'] = $_POST['nome'];
    $aluno['email'] = $_POST['email'];
    $aluno['curso'] = $_POST['curso'];
    $aluno['situacao'] = $_POST['situacao'];
    $aluno['ano_semestre_ingresso'] = $_POST['ano_semestre_ingresso'];
    
    insert($aluno);

    header('location:index.php');
?>