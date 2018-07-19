<!-- 

    Complète le formulaire de l'exercice précédent en ajoutant une troisième question : "Parles-tu anglais?" (champ de type Radio: réponses possibles: "yes" ou "non" ). Adapte le traitement du formulaire en fonction:

    Si l'âge est inférieur à 12 ans et que l'utilisateur répond "yes", retourne: "Hello boy!" ou "Hello Girl!" selon son genre.
    Si l'âge est entre 12 et 18 ans et que l'utilisateur répond "yes", affiche "Hello Teenage boy!" ou "Hello Teenage girl!" selon son genre.
    Si l'âge est entre 18 et 115 ans et que l'utilisateur répond "yes", affiche "Hello Sir!" ou "Hello Lady!" selon son genre. - Si l'âge est supérieur à 115 ans et que l'utilisateur répond "yes", affiche "Wow! Still alive, old man?" ou "old lady?" selon son genre.

 -->
<?php  
	// Dans les crochets de $_GET[] tu inscrits les valeurs de 'name' dans le formulaire. Le name est selectionné afin affiché la valeur du formulaire.
	
	$age = $_POST['age'];
	$lang = $_POST['eng'];
	$gender = $_POST['gender'];

	if ($age >= "0" AND $age < "12") {
		$msg = 'Salut petit!';
	} elseif ($age >= "12" AND $age < "18") {
		$msg = 'Salut l\'ado!';
	} elseif ($age >= "18" AND $age <= "115") {
		$msg = 'Salut l\'adulte!';
	} elseif ($age > "115") {
		$msg = 'Wow! Toujours vivant?';
	}
	
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
		 <fieldset>
	        <legend>Parles-tu anglais?</legend>
				<input type="radio" id="yes" name="eng" checked /><label for="yes">Yes</label>
				<input type="radio" id="no" name="eng" /><label for="no">No</label>
				<legend>Quel est ton genre ?</legend>
				<input type="radio" id="girl" name="gender" checked /><label for="yes">Girl/fille</label>
				<input type="radio" id="boy" name="gender" /><label for="no">Boy/Garçon</label>

			<input name="age" type="number" step="1" value="0" min="0" max="200">
			<button>valider</button>
		</fieldset>
		</form>
		<p> <?php echo $msg; ?></p>
		<!-- jQuery & JavaScript -->
		<script src=""></script>
		<script src=""></script>
	</body>
</html>