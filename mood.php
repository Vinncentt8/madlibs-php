<!DOCTYPE HTML>


<html>

<head>

<link href="form.css" rel="stylesheet" type="text/css" />
  <title>Formulier</title>
</head>

<body>

<?php
  include 'menu.php';
?>
  
	
	<div class="a2">	
		<h1>Er heerst paniek in het koninkrijk <?php echo $_POST["activity"]; ?>!</h1>
    
		Koning
		<?php echo $_POST["person"]; ?>
		is ten einde raad en als koning ten einde raad is,
		dan roept hij zijn ten-einde-raadsheer
		<?php echo $_POST["country"]; ?>.
		Het is een ramp! Het is een schande!"
		"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br>
		"Mijn 
		<?php echo $_POST["feeling"]; ?>
		is verdwenen! 
		Zo maar, zonder waarschuwing. En ik had net
		<?php echo $_POST["toy"]; ?><br>
		voor hem gekocht!


	

  </div>

  
  </body>
  <footer>Deze website is gemaakt door Vincent Hattinga Verschure</footer>
</html>


