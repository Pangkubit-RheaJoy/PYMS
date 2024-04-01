<?php
include('dbcon.php');
// Assuming you have a database connection established already

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];

    // SQL query to insert data into the table
    $sql = "INSERT INTO tbl_products (product_name, price) VALUES ('$productName', '$productPrice')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../management.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
