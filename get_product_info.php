
<?php

// Connect to the database and retrieve the product information
// Replace DB_HOST, DB_USER, DB_PASS, and DB_NAME with your own database credentials
$conn = new mysqli($servername, $username, $password, $dbname);
$pro_id= $_GET['Id'];
$sql = "SELECT * FROM proizvodi WHERE id = $pro_id"; // Replace 123 with the ID of the product you want to display
$result = $conn->query($sql);
$product = $result->fetch_assoc();

header('Content-Type: application/json');
echo json_encode($product);

?>
