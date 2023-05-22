<html>
<div class="d">
<div class="ar">
  <div id="textdebut">
  <img src="/img/SapiShoes" height="350px" width="350px">
  </div>
</div>
</div>
<div class="n">
    <div id="textnav">
        <a href="/index.php" id="linknavahaut">Accueil</a>
    </div>
  <div id="textnav">
    <a href="/accueil/page/Chaussures.php" id="linknavahaut">Nos Chaussures</a>
  </div>
  <div id="textnav">
    <a href="/accueil/page/apropos.php" id="linknavahaut">A propos</a>
  </div>
<?php
  if (!isset($_SESSION['username'])) {
    echo'
  <div id="textnav">
    <a href="/accueil/page/register.php" id="linknavahaut">Register</a>
  </div>
  <div id="textnav">
    <a href="/accueil/page/login.php" id="linknavahaut">Login</a>
  </div>'; }
  else {
    echo '
    <div id="textnav">
    <a href="/serveur/connexion/logout.php" id="linknavahaut">Logout</a>
  </div>
  ';} 
?>

</div>
</html>