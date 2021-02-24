<?php
include('bddcash.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/cashstyle.css">
        <title>Coefficients</title>
    </head>
    <body>
    	<div class="header">
        	<a href="index.php">Accueil</a>
	    </div>


<div class="content">
    <form action="coef.php" method="post">
        changer les coefficients:<br />
        <div class="center">
            <label for="coef1">COEF 24 CARATS</label><input type="text" name="coef1" value="<?php if(isset($_POST['coef1'])){echo htmlentities($_POST['coef1'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <label for="coef2">COEF 22 CARATS</label><input type="text" name="coef2" value="<?php if(isset($_POST['coef2'])){echo htmlentities($_POST['coef2'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <label for="coef3">COEF 18 CARATS</label><input type="text" name="coef3" value="<?php if(isset($_POST['coef3'])){echo htmlentities($_POST['coef3'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <label for="coef4">COEF 15 CARATS</label><input type="text" name="coef4" value="<?php if(isset($_POST['coef4'])){echo htmlentities($_POST['coef4'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <label for="coef5">COEF 9 CARATS</label><input type="text" name="coef5" value="<?php if(isset($_POST['coef5'])){echo htmlentities($_POST['coef5'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <label for="coef6">COEF ARGENT</label><input type="text" name="coef6" value="<?php if(isset($_POST['coef6'])){echo htmlentities($_POST['coef6'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
             <label for="coef7">COEF LINGOT</label><input type="text" name="coef7" value="<?php if(isset($_POST['coef7'])){echo htmlentities($_POST['coef7'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <label for="coef8">COEF MONNAIE</label><input type="text" name="coef8" value="<?php if(isset($_POST['coef8'])){echo htmlentities($_POST['coef8'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
           
            <input type="submit" value="Envoyer" />
		</div>
    </form>
</div>
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



//echo $coef7, PHP_EOL,
//     $coef8, PHP_EOL,
//     $coef9, PHP_EOL,
//     $coef10, PHP_EOL,
//     $coef11, PHP_EOL,
//     $coef12, PHP_EOL;
		
?>
		
	</body>
</html>
