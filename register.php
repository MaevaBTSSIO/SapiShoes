<?php
include('db.php');
session_start();

if (isset($_SESSION['username'])) {
    header("Location: /index.php");
    exit();
}

$errors = array();

if (isset($_POST['reg_user'])) {
    $password_2 = $_POST['password_2'];
    $username = $_POST['username'];
    $name = $_POST['nom'];
    $pastname = $_POST['prenom'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];

    // Check if email is already in use
    $stmt = $pdo->prepare("SELECT * FROM client WHERE mail=:email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        array_push($errors, "This email address is already in use");
    }

    $stmt = $pdo->prepare("SELECT * FROM client WHERE username=:username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        array_push($errors, "This username is already in use");
    }

    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    if (count($errors) == 0) {
        // Hash the password
        $password = password_hash($password_1, PASSWORD_DEFAULT);

        // Prepare the SQL statement
        $stmt = $pdo->prepare("INSERT INTO client (username, prenom, nom, mail, password) VALUES (:username, :pastname, :name, :email, :password)");

        // Bind the parameters to the placeholders
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':pastname', $pastname);
        $stmt->bindParam(':password', $password);

        // Execute the statement
        $stmt->execute();
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}





