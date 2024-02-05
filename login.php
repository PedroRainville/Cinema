<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/entrar-avatar.png" type="image/x-icon">
    <title>Login</title>
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
    cursor: pointer;
    text-decoration: none;
    padding-left: 60%;
}

a:hover {
    color: purple;
}
</style>
<body>
    <div class="box">
        <form action="testlogin.php" method="POST">
            <fieldset>
                <legend><b>Login</b></legend>
                <br></br>
                <div class="inputbox">            
                    <input type="number"  id="cpf" name="cpf" class="inputUser" required>
                    <label for="cpf" class="labelinput">CPF</label>
                </div>  
                <br></br>
                <div class="inputbox">            
                    <input type="text" class="inputUser" name="email">
                    <label for="email" class="labelinput">Email</label>
                </div>
                <br></br>
                <div class="inputbox">            
                    <input type="password" id="senha" name="senha" class="inputUser" required>
                    <label for="senha" class="labelinput">Senha</label>
                </div>
                <br></br>
                <a href="cadastro.php">Sem conta?</a>
                <br><br>
                <input type="submit" name="submit" id="submit" value="Entrar"></input>
            </fieldset>
        </form>
    </div>
</body>
</html>