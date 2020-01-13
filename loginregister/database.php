<?php
	
  $db = new mysqli('localhost','root','','freelancer');
  if ($db->connect_error) {
    die("Error: " . $db->connect_error);
	}
	
?>