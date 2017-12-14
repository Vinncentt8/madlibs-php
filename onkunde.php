<!DOCTYPE HTML>

<html>
<head>
<link href="form.css" rel="stylesheet" type="text/css" />
  <title>Formulier</title>
</head>

<body>

<div class="regel"></div>

<?php
  include 'menu.php';
?>

</div> 

<div class="a2"</div>
  <form method="post" action="mood2.php">
    
	  <div>
      <label>Wat zou je graag willen kunnen?</label>
      <input type="text" name="draw" />
    </div>
    
    <div>
      <label>Met welke persoon kun je goed opschieten?</label>
      <input type="text" name="person" />
    </div>
    
	<div>
      <label>Wat is je favoriete getal?</label>
      <input type="text" name="number" />
    </div>
	
	<div>
      <label>Wat heb je altijd bij je als je op vakantie gaat?</label>
      <input type="text" name="thing" />
    </div>
	
	<div>
      <label>Wat is je beste persoonlijke eigenschap?</label>
      <input type="text" name="character" />
    </div>
	
	<div>
      <label>Wat is je slechste persoonlijke eigenschap?</label>
      <input type="text" name="disease" />
    </div>
	<div>
      <label>Wat is het ergste dat je kan overkomen?</label>
      <input type="text" name="draw" />
    </div>
	
    <div>
	  <label>&nbsp;</label>
      <input type="submit" value="Versturen" />
    </div>
  </form>
  </div>
</body>
<footer>Deze website is gemaakt door Vincent Hattinga Verschure</footer>
</html>
