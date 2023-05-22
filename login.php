<?php
// session_start();
include('../../serveur/connexion/login.php');
include('../addons/navbar.php');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<form method="post">
            <input type="text" name="username" id="username" placeholder="Username" required>
            <input type="password" name="password"  placeholder="Mot de passe" required>
            <button type="submit"  name="login_user">Connexion</button>
        </form>
</body>
</html>