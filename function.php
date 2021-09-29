<?php

    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    
    function getConnection() {
        try {
          $opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
          $conexao = new PDO('pgsql:host=localhost;dbname=web2p1', "postgres", "1234", $opcoes);
            return $conexao;
        } catch (PDOException $e) {
          return null;
        }
    }

    function getAll(){
        $conexao = getConnection();
        $sql = "SELECT * FROM aluno";
        $sentenca = $conexao->query($sql);
        $consulta = $sentenca->fetchAll();
        return $consulta;
    }

    function insert($aluno){
        $conexao = getConnection();  
        $sql = "INSERT INTO aluno (nome, email, curso, situacao, ano_semestre_ingresso) values (:nome, :email, :curso, :situacao, :ano_semestre_ingresso)";
        $sentenca = $conexao->prepare($sql);
        $sentenca->bindParam(":nome", $aluno['nome']);
        $sentenca->bindParam(":email", $aluno['email']);
        $sentenca->bindParam(":curso", $aluno['curso']);
        $sentenca->bindParam(":situacao", $aluno['situacao']);
        $sentenca->bindParam(":ano_semestre_ingresso", $aluno['ano_semestre_ingresso']);
        $sentenca->execute();
    }
  
      

?>