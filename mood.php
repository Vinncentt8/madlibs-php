<!DOCTYPE HTML>


<html>

<head>

<link href="form.css" rel="stylesheet" type="text/css" />
  <title>Formulier</title>
</head>

<body background="images/background.png">

<?php
  include 'menu.php';
?>
  
	
	<div class="a2">	
		<h1>Er heerst paniek...</h1>

		<p>Er heerst paniek in het koninkrijk van <?php echo $_POST["country"]; ?>!</p>
    
		<p>Koning <?php echo $_POST["person"]; ?>
		is ten einde raad en als koning <?php echo $_POST["person"]; ?> ten einde raad is,
		dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["country"]; ?>.
		</p>
		

		<p>"<?php echo $_POST["person"]; ?> Het is een ramp! Het is een schande!"</p>

		<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<p>

		<p>"Mijn <?php echo $_POST["activity"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net 
			<?php echo $_POST["toy"]; ?> voor hem gekocht.</p>

		<p>"Majesteit uw <?php echo $_POST["activity"]; ?> komt vast vanzelf weer terug?"</p>
		
		<p> "Ja da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["instrument"]; ?>"</p>

		<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["voorwerp"]; ?> voor gebruiken."</p>

		<p>"<?php echo $_POST["person"]; ?> je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>

		<p>"Mij vervelen Sire!"</p>




	

  </div>
  	<footer>Deze website is gemaakt door Vincent Hattinga Verschure</footer>
  </body>
</html>


