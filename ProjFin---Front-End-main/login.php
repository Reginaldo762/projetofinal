<?php

if(isset($_POST['submit'])){
    
    //print_r($_POST['CPFcliente']);
    //print_r('<br>');

    //print_r($_POST['NomeCliente']);
    //print_r('<br>');

    //print_r($_POST['RG']);
    //print_r('<br>');

    //print_r($_POST['DataNasc']);
    //print_r('<br>');

    //print_r($_POST['Fone']);
    //print_r('<br>');

    //print_r($_POST['Email']);
    //print_r('<br>');

    //print_r($_POST['Senha']);
    //print_r('<br>');

    //print_r($_POST['Fone2']);
    //print_r('<br>');

    //print_r($_POST['uf']);

    include_once('conexao.php');

    $CPFcliente = $_POST['CPFcliente'];
    $NomeCliente = $_POST['NomeCliente'];
    $RG = $_POST['RG'];
    $DataNasc = $_POST['DataNasc'];
    $Fone = $_POST['Fone'];
    $Email = $_POST['Email'];
    $Senha = $_POST['Senha'];
    $Fone2 = $_POST['Fone2'];
    $uf = $_POST['uf'];
   
    $result = mysqli_query($conn, "INSERT INTO cliente(CPFcliente, NomeCliente, RG, DataNasc, Fone, Email, Senha,
    Fone2, uf) VALUES ('$CPFcliente', '$NomeCliente', '$RG', '$DataNasc', '$Fone', '$Email', '$Senha', '$Fone2', '$uf')");
   
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">Cuidadoso</a>
        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class="bx bx-menu" id="menu-icon"></i>
            <i class='bx bx-x-circle' style='color:#ffffff' id="close-icon"></i>
        </label>

        <nav class="navbar">
            <a href="index.html" style="--i:0">Inicio</a>
            <a href="#" style="--i:1">Sobre nós</a>
            <a href="loja.html" style="--i:2">Nossa loja</a>
            <a href="login.php" style="--i:3">Cadastre-se</a>
            <a href="prestadores.php">Prestadores</a>
            <a href="clientes.html" style="--i:3">Clientes</a>
        </nav>
    </header>

    <div class="container-log">
        <div class="form-image">
            <img src="assets/img/TeamUp-Login.svg">
        </div>
        <div class="form">
            <form action="login.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="NomeCliente">Nome</label>
                        <input id="NomeCliente" type="text" name="NomeCliente" placeholder="Digite seu nome" required>
                    </div>
                    <div class="input-box">
                        <label for="CPFcliente">CPF</label>
                        <input id="CPFcliente" type="text" name="CPFcliente" placeholder="Digite seu CPF" required>
                    </div>
                    <div class="input-box">
                        <label for="RG">RG</label>
                        <input id="RG" type="text" name="RG" placeholder="Digite seu RG" required>
                    </div>
                    <div class="input-box">
                        <label for="DataNasc">Data de nascimento</label>
                        <input id="DataNasc" type="date" name="DataNasc" placeholder="Digite sua data de nascimento" required>
                    </div>
                    <div class="input-box">
                        <label for="Email">Email</label>
                        <input id="Email" type="email" name="Email" placeholder="Digite seu email" required>
                    </div>
                    <div class="input-box">
                        <label for="Fone">Fone</label>
                        <input id="Fone" type="text" name="Fone" placeholder="Digite seu telefone" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="Senha">Senha</label>
                        <input id="Senha" type="text" name="Senha" placeholder="Digite sua senha" required>
                    </div>
                    <div class="input-box">
                        <label for="Fone2">Fone adicional</label>
                        <input id="Fone2" type="text" name="Fone2" placeholder="Digite seu telefone adicional" required>
                    </div>
                    <div class="input-box">
                        <label for="uf">UF</label>
                        <input id="uf" type="text" name="uf" placeholder="Digite seu estado" required>
                    </div>
                </div>
                
                <input type="submit" name="submit" id="submit">
            </form>
        </div>
    </div>
</body>
</html>