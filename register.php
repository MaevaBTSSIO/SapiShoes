<?php
// session_start();
include('../../serveur/connexion/register.php');
include('../addons/navbar.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
        <form method="post">
            <input type="text" name="username" id="username" placeholder="Username" required>
            <input type="text" name="prenom" id="prenom" placeholder="Prénom" required>
            <input type="text" name="nom" id="nom" placeholder="Nom" required>
            <input type="email" name="email" id="email" placeholder="Adresse mail" required>
            <input type="password" name="password_1"  placeholder="Mot de passe" required>
            <input type="password" name="password_2"  placeholder="Repeter le mot de passe" required>
            <button type="submit"  name="reg_user">Inscription</button>
        </form>
</body>
</html>