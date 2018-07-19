<?php  
	$heure = date("H:i");
	// var_dump($heure);
	// $heure = '12:05';


	if ($heure >= "05:00" AND $heure <= "09:00") {
		$msg = 'Bonjour!';
	} elseif ($heure >= "09:01" AND $heure <= "12:00") {
		$msg = 'Bonne journée!';
		// print_r('Bonne journée');
	} elseif ($heure >= "12:01" AND $heure <= "16:00") {
		$msg = 'Bon après-midi!';
	} elseif ($heure >= "16:01" AND $heure <= "21:00") {
		$msg = 'Bonne soirée!';
	} elseif ($heure >= "21:01" AND $heure <= "04:59") {
		$msg = 'Bonne nuit!';
	}
	echo $msg;
?>