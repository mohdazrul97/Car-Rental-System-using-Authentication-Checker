<?php

function Connect()
{
	$dbhost = "localhost";
	$dbuser = "id12003060_azrul";
	$dbpass = "Cubaan123";
	$dbname = "id12003060_azrulecarrental";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>