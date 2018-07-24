<!-- 

    Complète le formulaire de l'exercice précédent en ajoutant une troisième question : "Parles-tu anglais?" (champ de type Radio: réponses possibles: "yes" ou "non" ). Adapte le traitement du formulaire en fonction:

    Si l'âge est inférieur à 12 ans et que l'utilisateur répond "yes", retourne: "Hello boy!" ou "Hello Girl!" selon son genre.
    Si l'âge est entre 12 et 18 ans et que l'utilisateur répond "yes", affiche "Hello Teenage boy!" ou "Hello Teenage girl!" selon son genre.
    Si l'âge est entre 18 et 115 ans et que l'utilisateur répond "yes", affiche "Hello Sir!" ou "Hello Lady!" selon son genre. - Si l'âge est supérieur à 115 ans et que l'utilisateur répond "yes", affiche "Wow! Still alive, old man?" ou "old lady?" selon son genre.

 -->
<?php  
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	// Dans les crochets de $_GET[] tu inscrits les valeurs de 'name' dans le formulaire. Le name est selectionné afin affiché la valeur du formulaire.
	
	if (isset($_POST['submit'])){
		$age = $_POST['age'];
		$lang = $_POST['eng'];
		$gender = $_POST['gender'];
		if ($lang == 'Yes') {
			if ($gender == 'Boy/Garçon') {
				if ($age >= "0" AND $age < "12") {
					$msg = 'Hello boy!';
				} elseif ($age >= "12" AND $age < "18") {
					$msg = 'Hello teenage boy!';
				} elseif ($age >= "18" AND $age <= "115") {
					$msg = 'Hello sir!';
				} elseif ($age > "115") {
					$msg = 'Wow! Still alive, old man?';
				}
			} elseif ($gender == 'Girl/Fille') {
				if ($age >= "0" AND $age < "12") {
					$msg = 'Hello girl!';
				} elseif ($age >= "12" AND $age < "18") {
					$msg = 'Hello teenage girl!';
				} elseif ($age >= "18" AND $age <= "115") {
					$msg = 'Hello lady!';
				} elseif ($age > "115") {
					$msg = 'Wow! Still alive, old lady?';
				} 
			}
		}else {
			$msg ='Va apprendre l\'anglais';
		}
	} else{
		$msg='';
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
		<form action="" method="POST">
		 <fieldset>
	        <legend>Parles-tu anglais?</legend>
				<input type="radio" id="yes" name="eng" value="Yes" checked /><label for="Yes">Yes</label>
				<input type="radio" id="no" name="eng" value="No" /><label for="No">No</label>
			<legend>Quel est ton genre ?</legend>
				<input type="radio" id="girl" name="gender" value="Girl/Fille" checked /><label for="Girl/Fille">Girl/Fille</label>
				<input type="radio" id="boy" name="gender" value="Boy/Garçon" /><label for="Boy/Garçon">Boy/Garçon</label>
			<legend>Age</legend>
				<input name="age" type="number" step="1" value="0" min="0" max="200">
				<button name="submit">valider</button>
			<!-- <input type="submit" name="submit" value="envoyer"> -->
		</fieldset>
		</form>
		<p> <?php echo $msg; ?></p>
		<!-- jQuery & JavaScript -->
		<script src=""></script>
		<script src=""></script>
	</body>
</html>