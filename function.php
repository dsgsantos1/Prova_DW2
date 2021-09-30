<?php

    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    
    function getConnection() {
        try {
          $opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
          $conexao = new PDO('pgsql:host=ec2-100-24-169-249.compute-1.amazonaws.com;dbname=da0sfd736du9em', "iinxxkxehzuums", "37474b012aa066f73bd67f09056fa88e876bb8b27ef6e28a9c164b16bceb5685", $opcoes);
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