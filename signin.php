<?php

include 'condb.php';

// Recebe os dados do formulário de login
$Email = $_POST['Email'];
$Senha = $_POST['Senha'];

// Valida os dados de login
if (!empty($Email) && !empty($Senha)) {
    // Busca o usuário no banco de dados
    $query = "SELECT * FROM Clientes WHERE Email = '$Email'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        // Verifica se a senha está correta
        $row = mysqli_fetch_assoc($result);
        if (password_verify($Senha, $row['Senha'])) {
            // Cria uma sessão de login e redireciona para a página de destino
            $_SESSION['Email'] = $Email;
            session_start();
            
            $cpfCliente = $row["CPF"];
            echo "<script>alert('Acessando usuario.'); window.location='index.php';</script>"; 
        } else {
            // Senha incorreta
            echo "<script>alert('Usuário ou senha incorretos. Tente novamente.'); window.location='index.php';</script>"; 
        }
    } else {
        // Nome de usuário não encontrado
        echo "<script>alert('Usuário não encontrado. Tente novamente.'); window.location='index.php';</script>"; 
    }
} else {
    // Campos de login em branco
    echo "Preencha todos os campos de login.";
}
?>