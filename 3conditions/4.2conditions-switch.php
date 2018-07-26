<!-- 

    Si la note est égale à 1, 2 ou 3, affiche "Ce travail est nul."
	Si la note est égale à 6, 7, 8 ou 9, affiche "Ce travail n'est pas terrible."
	Si la note est égale à 10, affiche "Tout juste!"
	Si la note est égale à 11, 12, 13 ou 14, affiche "C'est pas mal."
	Si la note est 15, 16, 17, ou 18, affiche "Bravo!".
	Si la note est 19 ou 20, affiche "Police! Arrêtez ce tricheur!".
 -->
<?php
	// Dans les crochets de $_GET[] tu inscrits les valeurs de 'name' dans le formulaire. Le name est selectionné afin affiché la valeur du formulaire.
	
		
	$submit = isset($_POST['submit']);
	//var_dump($submit);
	switch ($submit){
		case true:
			$note = htmlspecialchars($_POST['note']);
		switch ($note) {
			case 1:
			case 2:
		    case 3:
				$msg = 'Ce travail est nul.';
				break;
			case 6:
			case 7:
		    case 8:
			case 9:
				$msg = 'Ce travail n\'est pas terrible.';
				break;
			case 10:
				$msg = 'Tout juste!';
				break;
		    case 11:
			case 12:
			case 13:
		    case 14:
				$msg = 'C\'est pas mal.';
				break;
			case 15:
			case 16:
		    case 17:
			case 18:
				$msg = 'Bravo!';
				break;
			case 19:
		    case 20:
				$msg = 'Arrêtez ce tricheur!';
				break;
			default:
				$msg = 'Merci de changer la note de l\'élève';
				break;
		} break;
		case false:
			$msg = '';
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>formulaire note</title>

		<!-- CSS -->
		<link rel="stylesheet" href="">
	</head>
	<body>
		<form action="" method="POST">
		 <fieldset>
			<legend>Note</legend>
				<input name="note" type="number" step="1" value="1" min="1" max="20">
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