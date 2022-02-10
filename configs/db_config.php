<?php

$mysqli = new mysqli("metticsysteme.com","mettics1","Mettic!@#45","mettics1_1");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else{
	// echo "connection ok";
}

