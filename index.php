<?php
	require_once 'bootstrap.php';
	$user = new \Entity\User();
	$user->setName('Jean jean');
	echo $user->talk();
	echo "This is preprod";
