<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    if ($_POST['username'] == 'professor' and $_POST['password'] == 'professor') {
        $_SESSION['loggedin'] = TRUE;
        header("location: Cadastrar_pedidos.php");
        exit();
    }
    else if ($_POST['username'] == 'biblio' and $_POST['password'] == 'biblio') {
        $_SESSION['loggedin'] = TRUE;
        header("location: Cadastrar_livros.php");
        exit();
    }
    else {
        $_SESSION['loggedin'] = FALSE;
        if ($_POST['username'] != 'professor' && $_POST['username'] != 'biblio') {
            $_SESSION['error_message'] = 'user';
        } else if ($_POST['password'] != 'professor' && $_POST['password'] != 'biblio') {
            $_SESSION['error_message'] = 'password';
        }
    }
}

?>


<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

</head>
<body>
    <h2>Login</h2>
    <p>Insira usuário e senha.</p>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <label for="username">Usuário:</label>
            <input type="text" name="username" class="form-control" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>" required>
            <?php
            
            if (isset($_SESSION['error_message']) && $_SESSION['error_message'] == 'user') {
                echo '<span class="help-block">Usuário não é válido.</span>';
                unset($_SESSION['error_message']); 
            }
            ?>
        </div>
        
        <br>

        <div>
            <label for="password">Senha:</label>
            <input type="password" name="password" class="form-control" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>" required>
            <?php

            if (isset($_SESSION['error_message']) && $_SESSION['error_message'] == 'password') {
                echo '<span class="help-block">Senha não é válida.</span>';
                unset($_SESSION['error_message']); 
            }
            ?>
        </div>
        
        <br>

        <div>
            <input type="submit" class="btn btn-primary" value="Acessar">
        </div>
    </form>

</body>
</html>
