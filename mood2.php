<!DOCTYPE HTML>
<html>
<head>
	<link href="form.css" rel="stylesheet" type="text/css" />
  	<title>Formulier</title> 
</head>

<body background="images/background.png">


<?php
  include 'menu2.php';
?>

 

  <div class="a2">
	
	
	Er zijn veel mensen die niet kunnen <?php echo $_POST["draw"]; ?>.
	Neem nou <?php echo $_POST["person"]; ?>.
	Zelfs met behulp van een potlood kan 
	<?php echo $_POST["person"]; ?> dat nog niet. Of nog niet eens met 
	<?php echo $_POST["thing"]; ?>	
	en zelfs niet met <?php echo $_POST["number"]; ?> potloden. 
	Dat heeft niet te maken met een gebrek aan
	<?php echo $_POST["disease"]; ?>	 
	maar met een te veel aan 
    <?php echo $_POST["character"]; ?>.
	 Dus dat leidt tot
	<?php echo $_POST["disease"]; ?>
	en dat is niet goed als je wilt
	<?php echo $_POST["draw"]; ?>
	Helaas voor
	<?php echo $_POST["person"]; ?>
  
  </div>
  <footer>Deze website is gemaakt door Vincent Hattinga Verschure</footer>
</body>
</html>


