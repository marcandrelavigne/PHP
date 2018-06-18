<?php

	/*
	 * Display Random Quotes
	 */

	$messages = array(
	    'Continuez à travailler et à vous améliorer! Les coups de circuit d’hier ne font pas gagner les parties d’aujourd’hui. - Babe Ruth',
	    'La persévérance dans une idée juste en amène le succès tôt ou tard. - Édouard Herriot',
	    'Le futur appartient à ceux qui voient les possibilités avant qu’elles ne deviennent évidentes. - Théodore Levitt'
	);

	echo $messages[rand(0, count($messages) - 1)];
?>