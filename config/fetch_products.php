<?php
include('dbcon.php');

// Perform a query to fetch product data
$sql = "SELECT ProductId, product_name, price FROM tbl_products";
$result = mysqli_query($conn, $sql);

// Fetch the result rows as an associative array
$productData = [];
while ($row = mysqli_fetch_assoc($result)) {
    $productData[] = $row;
}

// Close the database connection
mysqli_close($conn);

// Output the product data as JSON
header('Content-Type: application/json');
echo json_encode($productData);
?>
