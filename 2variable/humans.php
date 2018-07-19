<!-- 
	Une fois fait, visite les urls suivants et observe ce qui se passe:
	http://localhost/php/variable/humans.php?nom=Alexandre
	http://localhost/php/variable/humans.php?nom=Pierre
	http://localhost/php/variable/humans.php?nom=Jennifer
	teste d'autres variations.
 -->
<html>
  <head><title>Hi!</title></head>
  <body>
    <h1>Bonjour <?php echo $_GET['nom']; ?>!</h1>
  </body>
</html>