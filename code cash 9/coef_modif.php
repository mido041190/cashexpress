<?php
	include('bddcash.php');
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Coefficients modif</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<meta name="description" content="cours de l'or">
		<meta name="keywords" content="cash express, or">
		<link rel="stylesheet" href="css/cash-style.css">
		<link href="https://fonts.googleapis.com/css?family=Iceberg" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
	</head>
	
	<?php

                $link = mysqli_connect('localhost', 'root', '', 'coefcash');

			echo '<!--';	
$coef1=$_POST['coef1'];
$coef2=$_POST['coef2'];
$coef3=$_POST['coef3'];
$coef4=$_POST['coef4'];
$coef5=$_POST['coef5'];
$coef6=$_POST['coef6'];
$coef7=$_POST['coef7'];
$coef8=$_POST['coef8'];

echo '-->';

				$sql = mysqli_query($link," update coefs set 
   coef1='$coef1', 
   coef2='$coef2', 
   coef3='$coef3', 
   coef4='$coef4',
   coef5='$coef5',
   coef6='$coef6',
   coef7='$coef7',
   coef8='$coef8' ");


$recupCoef="SELECT * FROM coefs";			
$result =mysqli_query($link, $recupCoef); 
$row=mysqli_fetch_assoc($result);
$coef7 = $row['coef1'];
$coef8 = $row['coef2'];
$coef9 = $row['coef3'];
$coef10 = $row['coef4'];
$coef11 = $row['coef5'];
$coef12 = $row['coef6'];
$coef13 = $row['coef7'];
$coef14 = $row['coef8'];



echo $coef7, PHP_EOL,
     $coef8, PHP_EOL,
     $coef9, PHP_EOL,
     $coef10, PHP_EOL,
     $coef11, PHP_EOL,
     $coef12, PHP_EOL,
     $coef13, PHP_EOL,
     $coef14, PHP_EOL;
		
?>
<div id="conteneur">
		<header class="font_gris">			
				
				<?php include('menucash.php'); ?>
		</header>
		
			<div class = "position_flex ">		
				<form action="coef_modif.php" method="post">
					<p><em>* Champs obligatoires</em></p>
					<fieldset id="coordonnees">	
						<legend>changer les coefficients:</legend>
						
						<p>
						<label for="coef1" title="coefficient 1" class="oblig" >
						* COEF 24 CARATS : </label>
						<input type="text" name="coef1" id="coef1" placeholder="coef1" aria-required="true" 
						value="<?php if(isset($_POST['coef1'])){echo htmlentities($_POST['coef1'], ENT_QUOTES, 'UTF-8');} ?>" />
						</p>
						<p>
						<label for="coef2" title="coefficient 2" class="oblig" >
						* COEF 22 CARATS : </label>
						<input type="text" name="coef2" id="coef2" placeholder="coef2" aria-required="true"
						value="<?php if(isset($_POST['coef2'])){echo htmlentities($_POST['coef2'], ENT_QUOTES, 'UTF-8');} ?>" />
						</p>
						<p>
						<label for="coef3" title="coefficient 3" class="oblig" >
						* COEF 18 CARATS : </label>
						<input type="text" name="coef3" id="coef3" placeholder="coef3" aria-required="true"
						value="<?php if(isset($_POST['coef3'])){echo htmlentities($_POST['coef3'], ENT_QUOTES, 'UTF-8');} ?>" />
						<p>
						<p>
						<label for="coef4" title="coefficient 4" class="oblig" >
						* COEF 15 CARATS : </label>
						<input type="text" name="coef4" id="coef4" placeholder="coef4" aria-required="true"
						value="<?php if(isset($_POST['coef4'])){echo htmlentities($_POST['coef4'], ENT_QUOTES, 'UTF-8');} ?>" />
						</p>
						<p>
						<label for="coef5" title="coefficient 5" class="oblig" >
						* COEF 9 CARATS : </label>
						<input type="text" name="coef5" id="coef5" placeholder="coef5" aria-required="true"
						value="<?php if(isset($_POST['coef5'])){echo htmlentities($_POST['coef5'], ENT_QUOTES, 'UTF-8');} ?>" />
						</p>
						<p>
						<label for="coef6" title="coefficient 6" class="oblig" >
						* COEF ARGENT : </label>
						<input type="text" name="coef6" id="coef6" placeholder="coef6" aria-required="true"
						value="<?php if(isset($_POST['coef6'])){echo htmlentities($_POST['coef6'], ENT_QUOTES, 'UTF-8');} ?>" />
						</p>
						<p>
						<label for="coef7" title="coefficient 7" class="oblig" >
						* COEF LINGOT : </label>
						<input type="text" name="coef7" id="coef7" placeholder="coef7" aria-required="true"
						value="<?php if(isset($_POST['coef8'])){echo htmlentities($_POST['coef8'], ENT_QUOTES, 'UTF-8');} ?>" />
						</p>
						<p>
						<label for="coef8" title="coefficient 8" class="oblig" >
						* COEF MONNAIE : </label>
						<input type="text" name="coef8" id="coef8" placeholder="coef8" aria-required="true"
						value="<?php if(isset($_POST['coef8'])){echo htmlentities($_POST['coef8'], ENT_QUOTES, 'UTF-8');} ?>" />
						</p>
						
					</fieldset>			
					<fieldset id="envoi">
						<input type="reset" name="reset" id="reset" value="Annuler" title="Cliquez sur ce bouton pour annuler votre inscription" />
						<input type="submit" name="valid" id="valid" value="Valider" title="Cliquez sur ce bouton pour valider votre inscription"  />
					</fieldset>			
				</form>
			</div>			

		<footer>
			
		</footer>
			
	</div>
	
	</body>
</html>
		
		
		