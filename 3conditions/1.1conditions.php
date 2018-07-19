<?php  
	$chambre_est_sale = true;

	if ($chambre_est_sale == true) {
		$msg = 'Range ta chambre, on dirait la cage d\'un bonobo!';
	}elseif ($chambre_est_sale == false) {
		$msg = 'Ta chambre est trop propre, vis un peu!';
	}
	echo $msg;
?>