<?php
if(isset($_GET['pa'])){
$upi_address = $_GET['pa'];
// Redirect with the UPI address in the data section
header("Location: upi://pay?pa=$upi_address&pn=weads&cu=INR");
exit;
}
?>
