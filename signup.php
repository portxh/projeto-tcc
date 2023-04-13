<?php

include 'condb.php';

$Cpf = $_POST['Cpf'];
$Nome = $_POST['Nome'];
$Celular = $_POST['Celular'];
$Email = $_POST['Email'];
$Senha = password_hash($_POST['Senha'], PASSWORD_DEFAULT);


// Busca o usuário no banco de dados
$query = "SELECT * FROM Clientes WHERE Email = '$Email'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) == 1) {
    // Impede o cadastro duplicado
    echo "<script>alert('Usuário ja cadastrado. Tente efetuar o login.')</script>";
} else {
    // Cadastra o usuário

    $isql = "insert into Clientes (Cpf, Nome, Celular, Email, Senha) values('" . $Cpf . "' , '" . $Nome . "' ,'" . $Celular . "' , '" . $Email . "' , '" . $Senha . "');";
    $linha = $con->query($isql);

    if ($linha) {
        echo "<script>alert('Cadastro realizado com sucesso.'); window.location='index.php';</script>"; 
    } else {
        echo "<script>alert('Erro ao cadastrar usuário. Tente novamente.'); window.location='index.php';</script>"; 
    }

}
?>