<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['cpf']))
    {
        include_once('config.php');

        $cpf = $_POST['cpf'];

        $email = $_POST['email'];

        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE cpf = '$cpf' and email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        print_r($result);
        print_r($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['cpf']);
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        
        }
        else{
            $_SESSION['cpf'] = $cpf;
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: telainicial.php');

        }

    }
    else
    {   
        header('Location: telainicial.php');
    }




?>