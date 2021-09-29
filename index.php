<?php
    require_once "function.php";
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    // if (!isset($aluno)) {
    //     $aluno = array();
    //     $aluno['id'] = 0;
    //     $aluno['nome'] = "";
    //     $aluno['apelido'] = "";
    //     $aluno['altura'] = "";
    //     $aluno['peso'] = "";
    //     $aluno['posicao'] = "";
    //     $aluno['id_clube']= null;
    //     $aluno['id_selecao']= null;
    //     $aluno['data_nascimento'] = "";
    // }
    $alunos = getAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Alunos</title>
</head>
<body>
    
    <main>
        
        <div class="button">
            <a href="./frmStudent.php">Adicionar</a>
        </div>

        <section class="cards">

            <?php

                // var_dump($alunos);
                foreach ($alunos as $aluno){
                
                    echo"
                    <div class='card'>
                        
                        <img src='./img/aluno.png'>

                        <div class='content'>
                            
                            <h1>{$aluno['nome']}</h1>

                            <div class='text'>
                                <p class='atributo'>ID:</p>
                                <p class = 'value'>{$aluno['id']}</p>
                            </div>

                            <div class='text'>
                                <p class='atributo'>Curso:</p>
                                <p class = 'value'>{$aluno['curso']}</p>
                            </div>

                            <div class='text'>
                                <p class='atributo'>Email:</p>
                                <p class = 'value'>{$aluno['email']}</p>
                            </div>

                            <div class='text'>
                                <p class='atributo'>Situação:</p>
                                <p class = 'value'>{$aluno['situacao']}</p>
                            </div>

                            <div class='text'>
                                <p class='atributo'>Ingresso em:</p>
                                <p class = 'value'>{$aluno['ano_semestre_ingresso']}</p>
                            </div>
                        </div>

                    </div>
                    ";

                }
            ?>

        </section>


        </main>

</body>
</html>