<?php
include('session_client.php'); 
header ('Location:viewprofile.php');

$client_name = $conn->real_escape_string($_POST['client_name']);
$client_username = $_SESSION['login_client'];
$client_email = $conn->real_escape_string($_POST['client_email']);
$client_phone = $conn->real_escape_string($_POST['client_phone']);
$client_address = $conn->real_escape_string($_POST['client_address']);


$query = "UPDATE clients SET client_name = '" . $client_name . "', client_email = '" . $client_email . "', client_phone = '" . $client_phone . "', client_address = '" . $client_address . "' WHERE client_username = '$client_username'";


$success = $conn->query($query);

if (!$success){
	die("Couldnt enter data: ".$conn->error);
}

$conn->close();

?>