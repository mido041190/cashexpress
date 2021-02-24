	<?php
	 ini_set('display_errors', 'off');
//----------------------------OR-------------------------
		$content = file_get_contents("https://bullion-rates.com/ScriptWidget.js?sid=RR0001HXS&stk=08ZS9LF1DC");
		$pieces = explode(" ", $content);
		//$out = preg_replace('~\D~', '', $pieces[3931]);
		$cour = substr($pieces[3931], -13, 5);
		$ccour = str_replace(",", ".", $cour);
//echo ($ccour);

//--------------------------ARGENT------------------------
		$argcontent = file_get_contents("https://bullion-rates.com/ScriptWidget.js?sid=RR0001IBB&stk=08ZTHR71IL");
		$argpieces = explode(" ", $argcontent);
		//$argout = preg_replace('~\D~', '', $argpieces[3931]);
		$argcour = substr($argpieces[3931], -13, 4);
		$aargcour = str_replace(",", ".", $argcour);	
//echo ($aargcour);

//-------------------------LINGOT--------------------------
		$lingotcontent = file_get_contents("http://cours.or-de-bourse.com/cours-or-bourse-paris.html?fbclid=IwAR1HxwsbEZgTwanCghXAkvKej2BbvcFiuhoO7zFj9widLu9l7lSAYOLfX64");
		$lingotpieces = explode(" ", $lingotcontent);
		$lingotout = preg_replace('~\D~', '', $lingotpieces[279]);		
		$lingotcour = substr($lingotpieces[280], -6, 3);
		$lingotccour = $lingotout.$lingotcour;

//--------------------------LINGOTIN500--------------------
		$lingotincqctout = preg_replace('~\D~', '', $lingotpieces[387]);		
		$lingotincqctcour = substr($lingotpieces[388], -6, 3);
		$lingotincqctccour = $lingotincqctout.$lingotincqctcour;

//--------------------------LINGOTIN250--------------------
		$lingotindxctout = preg_replace('~\D~', '', $lingotpieces[495]);		
		$lingotindxctcour = substr($lingotpieces[496], -6, 3);
		$lingotindxctccour = $lingotindxctout.$lingotindxctcour;

//--------------------------LINGOTIN100--------------------
		$lingotinctout = preg_replace('~\D~', '', $lingotpieces[603]);		
		$lingotinctcour = substr($lingotpieces[604], -6, 3);
		$lingotinctccour = $lingotinctout.$lingotinctcour;

//--------------------------LINGOTIN50--------------------
		$lingotincqtout = preg_replace('~\D~', '', $lingotpieces[711]);		
		$lingotincqtcour = substr($lingotpieces[712], -6, 3);
		$lingotincqtccour = $lingotincqtout.$lingotincqtcour;

//--------------------------LINGOTINONCE--------------------
		$lingotinonceout = preg_replace('~\D~', '', $lingotpieces[821]);		
		$lingotinoncecour = substr($lingotpieces[822], -6, 3);
		$lingotinonceccour = $lingotinonceout.$lingotinoncecour;

//--------------------------LINGOTIN20--------------------
		$lingotinvgtcour = substr($lingotpieces[931], -6, 3);	

//--------------------------LINGOTIN10--------------------
		$lingotindxcour = substr($lingotpieces[1039], -6, 3);	


//--------------------------LINGOTIN5--------------------
		$lingotincqcour = substr($lingotpieces[1147], -6, 3);	
//------------------------------------------------
//print_r($lingotpieces);

//-------------------------MONNAIEFNAP-------------------------		
		$monnaiecontent = file_get_contents("http://cours.or-de-bourse.com/cours-or-bourse-paris.html?fbclid=IwAR1HxwsbEZgTwanCghXAkvKej2BbvcFiuhoO7zFj9widLu9l7lSAYOLfX64");
		$monnaie = explode(" ", $monnaiecontent);
		$monnaiefnapcour = substr($monnaie[1255], -6, 6);
		$monnaiefnapccour = str_replace(",", ".", $monnaiefnapcour);

//-------------------------MONNAIEFSUISSE--------------------------		
		$monnaiefsuissecour = substr($monnaie[1363], -6, 6);
		$monnaiefsuisseccour = str_replace(",", ".", $monnaiefsuissecour);

//-------------------------MONNAIEFULATINE--------------------------		
		$monnaiefulatinecour = substr($monnaie[1473], -6, 6);
		$monnaiefulatineccour = str_replace(",", ".", $monnaiefulatinecour);

//-------------------------SOUVERAIN--------------------------		
		$souveraincour = substr($monnaie[1577], -6, 6);
		$souverainccour = str_replace(",", ".", $souveraincour);

//-------------------------20US--------------------------		
		$vgtusout = preg_replace('~\D~', '', $monnaie[1685]);		
		$vgtuscour = substr($monnaie[1686], -6, 6);
		$vvgtuscour = str_replace(",", ".", $vgtuscour);
		$vgtusccour = $vgtusout.$vvgtuscour;

//-------------------------10US--------------------------		
		$dixuscour = substr($monnaie[1795], -6, 6);
		$dixusccour = str_replace(",", ".", $dixuscour);

//-------------------------50PESOS--------------------------		
		$cqtepesosout = preg_replace('~\D~', '', $monnaie[1901]);		
		$cqtepesoscour = substr($monnaie[1902], -6, 6);
		$ccqtepesoscour = str_replace(",", ".", $cqtepesoscour);
		$cqtepesosccour = $cqtepesosout.$ccqtepesoscour;

//-------------------------10FLORINS---------------------------		
		$dixflorinscour = substr($monnaie[2009], -6, 6);
		$dixflorinsccour = str_replace(",", ".", $dixflorinscour);

//-------------------------KRUGERRAND--------------------------		
		$krugerout = preg_replace('~\D~', '', $monnaie[2113]);		
		$krugercour = substr($monnaie[2114], -6, 6);
		$kkrugercour = str_replace(",", ".", $krugercour);
		$krugerccour = $krugerout.$kkrugercour;

//-------------------------10FNAPOLEON---------------------------		
		$dixfnapoleoncour = substr($monnaie[2223], -6, 6);
		$dixfnapoleonccour = str_replace(",", ".", $dixfnapoleoncour);

//-------------------------10FTUNISIE---------------------------		
		$dixftunisiecour = substr($monnaie[2331], -6, 6);
		$dixftunisieccour = str_replace(",", ".", $dixftunisiecour);

//-------------------------ELISABETHII---------------------------		
		$elisabethiicour = substr($monnaie[2439], -6, 6);
		$elisabethiiccour = str_replace(",", ".", $elisabethiicour);

//-------------------------1/2SOUVERAIN---------------------------		
		$demisouveraincour = substr($monnaie[2545], -6, 6);
		$demisouverainccour = str_replace(",", ".", $demisouveraincour);

//-------------------------5US---------------------------		
		$cinquscour = substr($monnaie[2653], -6, 6);
		$cinqusccour = str_replace(",", ".", $cinquscour);

//-------------------------20REICHMARKS---------------------------		
		$vgtreichcour = substr($monnaie[2761], -6, 6);
		$vgtreichccour = str_replace(",", ".", $vgtreichcour);


echo '<!--';

include 'coef.php';
		$gvqk=$coef7*$ccour;
		$gvdk=$coef8*$ccour;
		$gdhk=$coef9*$ccour;
		$gqzk=$coef10*$ccour;
		$gnk=$coef11*$ccour;
		$argt=$coef12*$aargcour;
		$lingot = $lingotccour*$coef13;
		$lingotincqct = $lingotincqctccour*$coef13;
		$lingotindxct = $lingotindxctccour*$coef13;
		$lingotinct = $lingotinctccour*$coef13;
		$lingotincqt = $lingotincqtccour*$coef13;
		$lingotinonce = $lingotinonceccour*$coef13;
		$lingotinvgt = $lingotinvgtcour*$coef13;
		$lingotindx = $lingotindxcour*$coef13;
		$lingotincq = $lingotincqcour*$coef13;
		$monnaiefnap = $monnaiefnapccour*$coef14;
		$monnaiefsuisse = $monnaiefsuisseccour*$coef14;
		$monnaiefulatine = $monnaiefulatineccour*$coef14;
		$souverain = $souverainccour*$coef14;
		$vgtus = $vgtusccour*$coef14;
		$dixus = $dixusccour*$coef14;
		$cqtepesos = $cqtepesosccour*$coef14;
		$dixflorins = $dixflorinsccour*$coef14;
		$kruger = $krugerccour*$coef14;
		$dixfnapoleon = $dixfnapoleonccour*$coef14;
		$dixftunisie = $dixftunisieccour*$coef14;
		$elisabethii = $elisabethiiccour*$coef14;
		$demisouverain = $demisouverainccour*$coef14;
		$cinqus = $cinqusccour*$coef14;
		$vgtreich = $vgtreichccour*$coef14;

		
		$tabcash = array(
		"Or 24K 999‰" => number_format($gvqk, 2, '.', ' '),
		"Or 22K 916‰" => number_format($gvdk, 2, '.', ' '),
		"Or 18K 750‰" => number_format($gdhk, 2, '.', ' '),
		"Or 14K 585‰" => number_format($gqzk, 2, '.', ' '),
		"Or 9K 375‰" => number_format($gnk, 2, '.', ' '),
		"Argent 925‰" => number_format($argt, 2, '.', ' '),

//		"LINGOT" => number_format($lingotccour, 2, '.', ' '),
//		"LINGOT500" => number_format($lingotincqct, 2, '.', ' '),
//		"Lingot250" => number_format($lingotindxct, 2, '.', ' '),
//		"Lingot100" => number_format($lingotinct, 2, '.', ' '),
//		"Lingot050" => number_format($lingotincqt, 2, '.', ' '),
//		"LingotONCE" => number_format($lingotinonce, 2, '.', ' '),
//		"Lingot020" => number_format($lingotinvgt, 2, '.', ' '),
//		"Lingot010" => number_format($lingotindx, 2, '.', ' '),
//		"Lingot005" => number_format($lingotincq, 2, '.', ' '),

//		"monnaie F NAP" => number_format($monnaiefnap, 2, '.', ' '),
//		"monnaie" => number_format($monnaiefsuisse, 2, '.', ' '),
//		"monnaie Union Latine" => number_format($monnaiefulatine, 2, '.', ' '),
//		"SOUVERAIN" => number_format($souverain, 2, '.', ' '),
//		"20 US" => number_format($vgtus, 2, '.', ' '),
//		"10 US" => number_format($dixus, 2, '.', ' '),
//		"50 PESOS" => number_format($cqtepesos, 2, '.', ' '),
//		"10 FLORINS" => number_format($dixflorins, 2, '.', ' '),
//		"KRUGERRAND" => number_format($kruger, 2, '.', ' '),
//		"10 F NAPOLEON" => number_format($dixfnapoleon, 2, '.', ' '),
//		"10 F TUNISIE" => number_format($dixftunisie, 2, '.', ' '),
//		"SOUVERAIN ELISABETH II" => number_format($elisabethii, 2, '.', ' '),
//		"1/2 SOUVERAIN" => number_format($demisouverain, 2, '.', ' '),
//      "5 US" => number_format($cinqus, 2, '.', ' '),
//   	"20 REICHMARKS" => number_format($vgtreich, 2, '.', ' ')
	
);
?>

<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>code cash</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<meta name="description" content="cours de l'or">
		<meta name="keywords" content="cash express, or">
		<link rel="stylesheet" href="css/cash-style.css">
		
		<link rel="stylesheet" href="css/cash-anim-home.css">
		<link href="https://fonts.googleapis.com/css?family=Iceberg" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
 
        <META HTTP-EQUIV="Refresh" CONTENT="300; URL=index.php"> 

	</head>
 
	<body>

		<div id="conteneur">
	
			<?php include('menucash.php'); ?>

			<div class="maj">
				<?php 			
					date_default_timezone_set('Europe/Paris');
					echo "Mis à jour le &nbsp &nbsp &nbsp &nbsp";
					echo  date('d/m/y h:i');
				?>
			</div>
		
			<article>	

				
								<?php
								foreach($tabcash as $cle=>$valeur)
								{
									echo '
										
											<div class="font_gris_clair bordure_noir prix"  style="position: relative; float:left;">
												<span class="prix_typo prix_marge_droit">'. $cle .'</span>
											</div>
											<div class="font_noir bordure_gris tarif" style="">
												<span class="tarif_typo">'.$valeur.'€</span>
											</div>
										
										';
								}
								?>
					
						
						

			</article>	
			</div><!-- End Conteneur -->
			<div class="pieces">
				Pour les PIECES et LINGOTS se renseigner auprès d'un responsable en boutique.
			</div>
			
			<footer>
				
				<p class="texte_code">
					Conformément à l'article 150 du code général des impôts, les opérations de vente d'objets en métaux précieux pour un
					montant supérieur à 5000 euros (par unité ou collection d'articles) sont soumises à un prélèvement forfaitaire de 6.5%
					(taxe sur les métaux précieux de 6%+0,5% de RDS) reversé à l'administration fiscale. Les transactions concernant les métaux 
					précieux sont obligatoirement réglées en chèque ou carte bancaire. Vous êtes informés que les informations concernant
					les transactions sur les métaux précieux, y compris l'identité des particuliers vendeurs, sont informatisées et conservées
					par notre magasin. Elles sont transmises à l'administration fiscale et peuvent être consultées par les agents des différents
					services de l'Etat.
				</p>
			</footer>	

			
		

	</body>
</html>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

<script>
	// MENU STICKY
	window.onscroll = function() {functionMenuSticky()};
	var navbar = document.getElementById("navbar");
	var sticky = navbar.offsetTop;

	function functionMenuSticky() 
	{
		if (window.pageYOffset >= sticky) {
			navbar.classList.add("sticky")
		} else {
			navbar.classList.remove("sticky");
		}
	}

</script>