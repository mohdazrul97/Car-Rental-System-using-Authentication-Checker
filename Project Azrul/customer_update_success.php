<?php
include('session_customer.php'); 
header ('Location:viewprofilecustomer.php');

$client_name = $conn->real_escape_string($_POST['customer_name']);
$client_username = $_SESSION['login_customer'];
$client_email = $conn->real_escape_string($_POST['customer_email']);
$client_phone = $conn->real_escape_string($_POST['customer_phone']);
$client_address = $conn->real_escape_string($_POST['customer_address']);


$query = "UPDATE customers SET customer_name = '" . $client_name . "', customer_email = '" . $client_email . "', customer_phone = '" . $client_phone . "', customer_address = '" . $client_address . "' WHERE customer_username = '$client_username'";


$success = $conn->query($query);

if (!$success){
	die("Couldnt enter data: ".$conn->error);
}

$conn->close();

?>