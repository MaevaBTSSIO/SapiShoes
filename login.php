<?php 
include ('db.php');
session_start();
error_reporting(0);
if (isset($_SESSION['username'])) {
    header("Location: /index.php");
}



if (isset($_POST['login_user'])) {
    $errors = array();
    $password = $_POST['password'];
    $username = $_POST['username'];

    if (empty($username)) {
        array_push($errors, "username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        // Prepare the SQL statement
        $stmt = $pdo->prepare("SELECT * FROM client WHERE username=:username");

        // Bind the parameter to the placeholder
        $stmt->bindParam(':username', $username);

        // Execute the statement
        $stmt->execute();

        // Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify the password
		echo $password;
        if (password_verify($password, $result['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $result['user_id'];
        
            header('location: /index.php');
            exit;
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
?>