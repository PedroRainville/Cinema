<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbpassword = '';
    $dbname = 'formulario-cinema';
    
    $conexao = new mysqli($dbHost, $dbUsername, $dbpassword, $dbname);

    if($conexao->connect_error){
        echo "Erro";
    }
    else {
        echo "Conexao feita";
    }



?>