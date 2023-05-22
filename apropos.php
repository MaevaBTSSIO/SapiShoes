<?php
session_start();
require("../addons/navbar.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>SapiShoes</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>

<?php
if(isset($_POST['submit'])) {
	// récupère les données soumises
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	// adresse email où envoyer le message
	$to = "votre_adresse_email@domaine.com";

	// sujet de l'email
	$subject = "Nouveau message depuis le formulaire de contact";

	// corps de l'email
	$body = "Vous avez reçu un nouveau message depuis le formulaire de contact de votre site web. Voici les détails :\n\nNom: $name\nEmail: $email\nMessage: $message";

	// envoi l'email
	mail($to, $subject, $body);

	// message de confirmation
	echo "Merci d'avoir nous contacter. Nous vous répondrons dans les plus brefs délais.";
}
?>

<h1>Formulaire de contact</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<label for="name">Nom :</label>
	<input type="text" id="name" name="name" required>

	<label for="email">Adresse email :</label>
	<input type="email" id="email" name="email" required>

	<label for="message">Message :</label>
	<textarea id="message" name="message" required></textarea>

	<input type="submit" name="submit" value="Envoyer">
</form>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.0513308224495!2d0.5837418766998841!3d43.6471003711024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a982b99418b553%3A0x6911ff0d11725494!2s7%20Rue%20Coquille%2C%2032000%20Auch!5e0!3m2!1sfr!2sfr!4v1683736537232!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</body>

<?php 
require("../addons/footer.php");
?>
 
    <script src="script.js"></script>
  </body>
</html>