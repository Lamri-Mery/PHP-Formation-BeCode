<!-- 
    Si l'âge est inférieur à 12 ans, affiche "Salut petit!"
    Si l'âge est entre 12 et 18 ans, affiche "Salut l'ado!"
    Si l'âge est entre 18 et 115 ans, affiche "Salut l'adulte!"
    Si l'âge est supérieur à 115 ans, affiche "Wow! Toujours vivant?"
 -->
<?php  
	// Dans les crochets de $_GET[] tu inscrits les valeurs de 'name' dans le formulaire. Le name est selectionné afin affiché la valeur du formulaire.
	$submit = isset($_POST['submit']);
	// if ($submit == true){
		@$age = $_GET['age'];
		if ($age >= '0' AND $age < '12') {
			$msg = 'Salut petit!';
		} elseif ($age >= '12' AND $age < '18') {
			$msg = 'Salut l\'ado!';
		} elseif ($age >= '18' AND $age <= '115') {
			$msg = 'Salut l\'adulte!';
		} elseif ($age > '115') {
			$msg = 'Wow! Toujours vivant?';
		} else {
			$msg ='a';
		} 
	// } else {
	// 	$msg = 'b';
	// }
	
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>formulaire age</title>

		<!-- CSS -->
		<link rel="stylesheet" href="">
	</head>
	<body>
		<form action="" method="GET">
		<label>Age</label><input name="age" type="number" step="1" value="0" min="0" max="200">
		<button name="submit">valider</button>
		</form>
		<p> <?php echo $msg; ?></p>
		<!-- jQuery & JavaScript -->
		<script src=""></script>
		<script src=""></script>
	</body>
</html>