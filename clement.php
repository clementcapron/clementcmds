<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Formulaire de contact</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
	<?php
		echo "Hello World";
	?>
<div class="main">
<h2 class="formulairecontact">Contact<h2><br>
<form method="post" onsubmit="return var1()" action="mailto:test" name="contacts">
	<input type="text" name="username" placeholder="Pseudo"><br>
	<input type="password" name="password" placeholder="Mot de passe"><br>
	<input type="checkbox"><label class="g1">Enregistrer mon mot de passe</label><br>
	<input type="radio" name="civ"><label>Monsieur</label><input type="radio" name="civ"><label>Madame</label><br>

	<textarea name="message" placeholder="Votre message..." rows="5" cols="33"></textarea><br>
	<input type="submit" value="Envoyer">
</form>
<a href="index.html" class="buttonback">Retourner sur la première page</a>
</div>
</body>
</html>