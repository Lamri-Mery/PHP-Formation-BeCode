<!-- Ta chambre pourrait être soit "dégoutante", "sale", "en ordre", "immaculée", "maniaque". -->
<?php  
	$decoutante = 'dégoutante';
	$sale = 'sale';
	$orde = 'en ordre';
	$immaculée = 'immaculée';
	$maniaque = 'maniaque';
	$chambre = $maniaque;

	if ($chambre == $decoutante) {
		$msg = 'papa dit: Souhaites tu que je prenne rendez-vous avec des éboueurs? En découvrant ta chambre, ils comprendront que leurs travails représente l\'espoir de l\'humanité';
	}elseif ($chambre == $sale) {
		$msg = 'Maman dit: Je ne savais pas que tu faisais concurence à une porcherie, je te propose de déménager dans une ferme afin de manger avec des porcs';
	}elseif ($chambre == $orde) {
		$msg = 'Chayma dit: Veux tu nettoyé ta chambre ? Elle n\'est pas encore nikel';
	}elseif ($chambre == $immaculée) {
		$msg = 'Billel dit: Viens nettoyé chez moi ma femme de menage est malade cette semaine';
	}elseif ($chambre == $maniaque) {
		$msg = 'Raïssa dit: Que t\'est il arrivé ? Qui est ta nouvelle femme de ménage ?';
	}

	echo $msg;
?>
