<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>code cash</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<meta name="description" content="cours de l'or">
		<meta name="keywords" content="cash express, or">
		<link rel="stylesheet" href="css/cash-style.css">
		<link rel="stylesheet" href="css/cash-anim-coef-actuel.css">
		<link href="https://fonts.googleapis.com/css?family=Iceberg" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">


	</head>

	<body>

		<div id="conteneur">
		
		<?php include('menucash.php'); ?>
		 
<?php
	
	$content = file_get_contents("https://bullion-rates.com/ScriptWidget.js?sid=RR0001HXS&stk=08ZS9LF1DC");
		$pieces = explode(" ", $content);
		$out = preg_replace('~\D~', '', $pieces[3931]);
		$cour = substr($pieces[3931], -12, 5);
		$ccour = str_replace(",", ".", $cour);
	$argcontent = file_get_contents("https://bullion-rates.com/ScriptWidget.js?sid=RR0001IBB&stk=08ZTHR71IL");
		$argpieces = explode(" ", $argcontent);
		$argout = preg_replace('~\D~', '', $argpieces[3931]);
		$argcour = substr($argpieces[3931], -11, 4);
		$aargcour = str_replace(",", ".", $argcour);
		
echo '<!--';		
		include 'coef.php';
		$gvqk=$coef7;
		$gvdk=$coef8;
		$gdhk=$coef9;
		$gqzk=$coef10;
		$gnk=$coef11;
		$argt=$coef12;

		$tabcash = array(
		"Or 24K" => number_format($gvqk, 2, '.', ' '),
		"Or 22K" => number_format($gvdk, 2, '.', ' '),
		"Or 18K" => number_format($gdhk, 2, '.', ' '),
		"Or 14K" => number_format($gqzk, 2, '.', ' '),
		"Or 9K" => number_format($gnk, 2, '.', ' '),
		"Or PLAQUE" => number_format(0.50, 2, '.', ' '),
		"ARGENT 925" => number_format($argt, 2, '.', ' ') 
);
//echo '-->';	
	
		$link = mysqli_connect('localhost', 'root', '', 'coefcash');
		
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
	?>
		
			<article>
	<?php
			echo '<section>';
				foreach($tabcash as $cle=>$valeur)
				{
					echo '
						<div class="font_gris_clair bordure_noir anim_coef block_coef">
							<h2 class="centrage_typo prix_typo_coef" style="margin-bottom:0;">'.$valeur.'</h2>		
							<p class="centrage_typo tarif_typo_coef">'.$cle.'</p>
						</div>';					
				}
			echo '</section>';
			?>
		
			</article>	
			
			
			
		</div>

	</body>
</html>