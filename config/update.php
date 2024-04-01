<?php
include('dbcon.php');
// Assuming you have a database connection established already

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {
    // Check if the product ID is set
    if (isset($_POST['product_id'])) {
        // Sanitize the product ID
        $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);

        // Update the Value column in tbl_products to 1 for the specific product ID
        $sql = "UPDATE tbl_products SET Value = 1 WHERE ProductId = '$product_id'";

        if ($conn->query($sql) === TRUE) {
            header('Location:../cashier.php');
        } else {
            echo "Error updating value: " . $conn->error;
        }

        $conn->close();
    }
}
?>
