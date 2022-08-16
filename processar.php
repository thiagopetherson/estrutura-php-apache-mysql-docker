<?php
    try {
        
        $banco = "mysql:host=db;dbname=testando_docker_4";
        $usuario = 'root';
        $senha = 'root';
        
        $conn = new PDO($banco,$usuario,$senha, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                 
        // Inserindo dados no banco
        $sqlInserindoDados = "INSERT INTO users (name) VALUES ('Thiago'),('Luciana'),('White Fairy'),('Leandro'),('Bernardo')";   

        $query = $conn->prepare($sqlInserindoDados);
        $query->execute();

        header('Location: index.php');
    } catch(Exception $e) {
        echo 'Exception -> ';
        var_dump($e->getMessage());
    }
?>