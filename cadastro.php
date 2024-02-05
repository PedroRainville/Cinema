<?php

    if(isset($_POST['submit']))//confere se o submit existe e retorna
    {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('CPF: ' . $_POST['CPF']);
        // print_r('<br>');
        //print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
       // print_r('Nascimento: ' . $_POST['data_nascimento']);
        //print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        //print_r('<br>');
        //print_r('Cidade: ' . $_POST['cidade']);
        //print_r('<br>');
        // print_r('CEP: ' . $_POST['cep']);
        //  print_r('<br>');
        // print_r('Numero: ' . $_POST['numero']);
       //print_r('<br>');
       // print_r('Senha: ' . $_POST['senha']);
       // print_r('<br>');
       // print_r('Confirmar Senha: ' . $_POST['confirma']);

        include_once('config.php');//importando a conexao com o banco;

       $nome = $_POST['nome'];
       $email = $_POST['email'];
       $telefone = $_POST['telefone'];
       $cpf = $_POST['cpf'];
       $genero = $_POST['genero'];
       $nascimento = $_POST['data_nascimento'];
       $estado = $_POST['estado'];
       $cidade = $_POST['cidade'];
       $cep = $_POST['cep'];
       $numero = $_POST['numero'];
       $senha = $_POST['senha'];
       $confirma = $_POST['confirma'];

       $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, cpf, genero, data_nascimento, estado, cidade, cep, numero, senha, confirma)
       values ('$nome', '$email', '$telefone', '$cpf', '$genero', '$nascimento', '$estado', '$cidade', '$cep', '$numero', '$senha', '$confirma')");
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/senha-de-login.png" type="image/x-icon">
    <title>Cadastro</title>
</head>
<style>
    body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
    color: white;
}

.box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgb(0, 0, 0, 0.6);
    padding: 15px;
    border-radius: 15px;
    width: 20%;
    color: white;
}

fieldset {
    border: 3px solid dodgerblue;
}

legend {
    border: 1px solid dodgerblue;
    padding: 10px;
    text-align: center;
    background-color: dodgerblue;
    border-radius: 8px; 
}

.inputbox{
    position: relative;
}

.inputUser {
    background: none;
    border: none;
    border-bottom: 1px solid white;
    outline: none;
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}

.labelinput{
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: .5s;
}

.inputUser:focus ~ .labelinput,
.inputUser:valid ~ .labelinput{
    top: -20px;
    font-size: 12px;
    color: dodgerblue;

}

#data_nascimento {
    border: none;
    padding: 8px;
    border-radius: 10px;
    outline: none;
    font-size: 15px;
}

#submit {
    background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90,20,220));
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
}

#submit:hover{
    background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
}

a {
    color: white;
    text-decoration: none;
    cursor: pointer;
    padding-left: 70%;
}

a:hover {
    color: purple;
}

</style>
<body>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastre-se</b></legend>
                <br></br>
                <div class="inputbox">            
                    <input type="text" id="nome" name="nome" class="inputUser" required>
                    <label for="nome" class="labelinput">Nome</label>
                </div>
                <br></br>
                <div class="inputbox">            
                    <input type="text" id="email" name="email" class="inputUser" required>
                    <label for="email" class="labelinput">Email</label>
                </div>
                <br></br>
                <div class="inputbox">            
                    <input type="number" id="telefone" name="telefone" class="inputUser" required>
                    <label for="telefone" class="labelinput">Telefone</label>
                </div>
                <br></br>
                <div class="inputbox">            
                    <input type="number"  id="cpf" name="cpf" class="inputUser" required>
                    <label for="cpf" class="labelinput">CPF</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="genero" name="genero" value="Masculino">
                <label for="">Masculino</label>
                <br></br>
                <input type="radio" id="genero" name="genero" value="Feminino">
                <label for="">Feminino</label>
                <br></br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <div class="inputbox">            
                    <input type="text" name="estado" class="inputUser">
                    <label for="estado" class="labelinput">Estado</label>
                </div>
                <br></br>
                <div class="inputbox">            
                    <input type="text" id="cidade" name="cidade" class="inputUser">
                    <label for="cidade" class="labelinput">Cidade</label>
                </div>
                <br></br>
                <div class="inputbox">            
                    <input type="number" name="cep" class="inputUser">
                    <label for="cep" class="labelinput">CEP</label>
                </div>
                <br></br>
                <div class="inputbox">            
                    <input type="number" class="inputUser" name="numero">
                    <label for="numero" class="labelinput">Numero</label>
                </div>
                <br></br>
                <div class="inputbox">            
                    <input type="password" id="senha" name="senha" class="inputUser" required>
                    <label for="senha" class="labelinput">Senha</label>
                </div>
                <br></br>
                <div class="inputbox">            
                    <input type="password" id="confirma" name="confirma" class="inputUser" required>
                    <label for="confirma" class="labelinput">Confirmar Senha</label> 
                </div>
                <br></br>
                <a href="login.php">Fazer Login!</a>
                <br><br>
                <button type="submit" name="submit" id="submit">Criar</button>
            </fieldset>
        </form>
    </div>
</body>
</html>