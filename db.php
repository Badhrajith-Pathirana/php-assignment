<?php
$connection=mysqli_connect("localhost",'root','',"gtf");
if (!$connection){
	die('Not connected: ' .mysqli_connect_error());
}

