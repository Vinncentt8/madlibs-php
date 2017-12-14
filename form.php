<!DOCTYPE HTML>

<html>
<head>
<link href="form.css" rel="stylesheet" type="text/css" />
  <title>Formulier</title>
</head>
<body background="images/background.png">
  <div class="a1" ></div>

<?php
  include 'menu.php';
?>


</div> 

<div class="a2" >
  <form method="post" action="mood.php">
    
	  <div>
      <label>Welk dier zou je nooit als huisdier willen?</label>
      <input type="text" name="activity" />
    </div>
    
    <div>
      <label>Typ de naam van de belangrijkste persoon in je leven?</label>
      <input type="text" name="person" />
    </div>
    
	<div>
      <label>In welk land zou je graag willen wonen?</label>
      <input type="text" name="country" />
    </div>
	
	<div>
      <label>Wat doe je als je je verveelt?</label>
      <input type="text" name="feeling" />
    </div>
	
	<div>
      <label>Met welk speelgoed speelde je vroeger het meest?</label>
      <input type="text" name="toy" />
    </div>
	
	<div>
      <label>Bij welke docent spijbel je het liefst?</label>
      <input type="text" name="instrument" />
    </div>
	
	<div>
      <label>Als je 100.000 euro zou hebben wat zou je dan kopen?</label>
      <input type="text" name="voorwerp" />
    </div>
	
	<div>
      <label>Wat is je favoriete bezigheid?</label>
      <input type="text" name="instrument" />
    </div>
    <div>
	  <label>&nbsp;</label>
      <input type="submit" value="Versturen" />
    </div>
  </form>
  </div>
  <footer>Deze website is gemaakt door Vincent Hattinga Verschure</footer>
</body>
</html>
