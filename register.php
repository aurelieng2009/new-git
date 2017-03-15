<?php require "init.php" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="contenu" content="contenu">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inscription-travel Planner</title>
</head>
<body>
	<?php require "navbar.php" ?>
	<div class="area-under-nav-register">
		<div class="col-xs-4 formulaire-photo-one"></div>
		<div class="col-xs-4 formulaire">
			<form method="POST" action="verify.php">
				<legend class="text-center space-legend">Inscription</legend>
				<label class="space-label" for="texte">Nom : </label>
				<input type="text" id="surname" name="surname" placeholder="Votre Nom" class="form-control space-input">
				<label class="space-label" for="texte">Prenom : </label>
				<input type="text" id="name" name="name" placeholder="Votre Prénom" class="form-control space-input">
				<label class="space-label" for="texte">Pseudo : </label>
				<input type="text" id="pseudo" name="pseudo" placeholder="Votre Pseudo" class="form-control space-input">
				<label class="space-label" for="texte">Mail : </label>
				<input type="mail" id="mail" name="mail" placeholder="Votre Mail" class="form-control space-input">
				<label class="space-label" for="texte">Mot de passe : </label>
				<input type="password" id="password" name="password" placeholder="Votre Mot de passe" class="form-control space-input">
				<label class="space-label" for="texte">Vérification mot de passe : </label>
				<input type="password" id="password_verif" name="password_verif" placeholder="Vérification mot de passe" class="form-control space-input">
				<input type="checkbox" name="cgu" required><span class="cgu"> J'accepte les <a href="cgu.php">CGUs</a></span></br></br>
				<button class="btn btn-warning">Valider</button>
			</form>
		</div>
		<div class="col-xs-4 formulaire-photo-two"></div>
		<?php require "footer.php" ?>
	</div>
	<?php require "js.php" ?>
</body>
</html>