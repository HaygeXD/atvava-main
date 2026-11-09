<?php
session_start();

if(isset($_POST['username'])){
    if($_POST['username']=='admin' && $_POST['password']=='abc123'){
        $_SESSION['username'] = $_POST['username'];
        header('Location: atvv4.php');
    }
    else{
        echo "Credenciais Inválidas!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="atv4.php" method="post">
        Usuário: <input type="text" name="username" required>
        Senha: <input type="password" name="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>