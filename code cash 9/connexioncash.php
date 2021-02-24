<?php
include('bddcash.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/cash-style.css">
        <link rel="stylesheet" href="css/cash-style2.css">
		<link href="https://fonts.googleapis.com/css?family=Iceberg" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
        <title>Coefficients</title>
    </head>
    <body>
    	
<?php
//Si lutilisateur est connecte, on le deconnecte
if(isset($_SESSION['username']))
{
	//On le deconnecte en supprimant simplement les sessions username et userid
	unset($_SESSION['username'], $_SESSION['userid']);
?>

<div class="message">
<p>Vous avez bien été déconnecté.</p><br />
<a href="index.php">Accueil</a><br />
</div>

<?php

$link = mysqli_connect('localhost', 'root', '', 'coefcash');

}
else
{
	$ousername = '';
	//On verifie si le formulaire a ete envoye
	if(isset($_POST['username'], $_POST['password']))
	{
		//On echappe les variables pour pouvoir les mettre dans des requetes SQL
		if(get_magic_quotes_gpc())
		{
			$ousername = stripslashes($_POST['username']);
			$username = mysqli_real_escape_string($link, stripslashes($_POST['username']));
			$password = stripslashes($_POST['password']);
		}
		else
			$link = mysqli_connect('localhost', 'root', '', 'coefcash');
		{
			
			$username = mysqli_real_escape_string($link, $_POST['username']);
			$password = $_POST['password'];
		}
		//On recupere le mot de passe de lutilisateur
		$req = mysqli_query($link, 'SELECT password,id from users where username="'.$username.'"');

		$dn = mysqli_fetch_array($req, MYSQLI_BOTH);
		
		
		
		//On le compare a celui quil a entre et on verifie si le membre existe
		if($dn['password']==$password and mysqli_num_rows($req)>0)
		{
			//Si le mot de passe es bon, on ne vas pas afficher le formulaire
			$form = false;
			//On enregistre son pseudo dans la session username et son identifiant dans la session userid
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['userid'] = $dn['id'];
?>

<div class="message">
<p>Vous avez bien été connecté. Vous pouvez accéder à votre espace membre.</p><br />
<a href="coef_modif.php">Espace membre</a><br />
</div>

<?php
		}
		else
		{
			//Sinon, on indique que la combinaison nest pas bonne
			$form = true;
			$message = 'La combinaison que vous avez entrée n\'est pas bonne.';
		}
	}
	else
	{
		$form = true;
	}
	if($form)
	{
		//On affiche un message sil y a lieu
	if(isset($message))
	{
		echo '<div class="message">'.$message.'</div>';
	}
	//On affiche le formulaire
?>

	<div id="conteneur">

		<?php include('menucash.php'); ?>
	
		<div class = "position_flex ">		
			<form action="connexioncash.php" method="post">
				<p><em>Veuillez entrer vos identifiants pour vous connecter:</em></p>
					<fieldset id="coordonnees">	
						<legend>formulaire connexion:</legend>	
							<p>
							 <label for="username">Nom d'utilisateur</label>
							 <input type="text" name="username" id="username" value="<?php echo htmlentities($ousername, ENT_QUOTES, 'UTF-8'); ?>" /><br />
							<p/>
							<p>
							<label for="password">Mot de passe</label><input type="password" name="password" id="password" /><br />
							</p>
					</fieldset>			
					<fieldset id="envoi">
						<input type="submit" value="Connexion" />
					</fieldset>			
			</form>
		</div>	
		
		<footer>
			
		</footer>
		
	</div>

<?php
	}
}
?>
		
	</body>
</html>