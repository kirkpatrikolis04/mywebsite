<?php 
	
	require 'core/classes/class.router.php';

	$uri = $_GET['uri'];

	Router::routes($uri);