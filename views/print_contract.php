<?php
require_once './databasecnx.php';
// Retrieve the contract number from the query string
$contract_number = $_GET['contract'];

// Database query to fetch the contract details
$sql = "SELECT * FROM contrat WHERE NumContrat = '$contract_number'";
$result = $cnx->query($sql);

if ($result->num_rows > 0) {
    // Output contract data here
    $contract = $result->fetch_assoc();
    echo "<h1>Contract ID: " . $contract['NumContrat'] . "</h1>";
    echo "<p>Client Name: " . $contract['nom'] . "</p>";
    // Add more contract details...
} else {
    echo "Contract not found.";
}
?>
