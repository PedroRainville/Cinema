<?php
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        print_r('Email: '. $email);
        print_r('Senha: ' . $senha);
        print_r('Email: '. $cpf);
    }

    else {
        header('Location: login.php');
    }





?>