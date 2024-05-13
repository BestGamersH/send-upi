<?php
if(isset($_GET['pa'])){
$upi_address = $_GET['pa'];

// Enhanced UPI address validation (same pattern as in Python)
$upi_pattern = "/^[a-zA-Z0-9.-]+@[a-zA-Z0-9.-]+$/";
if (!preg_match($upi_pattern, $upi_address)) {
    echo "Invalid UPI address format.";
    exit;
}
// Redirect with the UPI address in the data section
header("Location: upi://pay?pa=$upi_address&pn=weads&cu=INR");
exit;
}
?>
