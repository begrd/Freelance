<?php
	session_start();
	session_destroy();
	header("location:/freelancer/index.php");
?>