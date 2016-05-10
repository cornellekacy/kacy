<?php
	session_start();

	if (!empty($_SESSION['user_id'])) {
		$_SESSION['user_id'] = '';
	}
	session_destroy();
	header('location: login.php');
?>