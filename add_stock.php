<?php
include 'db.php'; // Include the database connection script

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // SQL Query to insert the stock
    $sql = "INSERT INTO stocks (name, price, quantity) VALUES ('$name', '$price', '$quantity')";

    if ($conn->query($sql) === TRUE) {
        header("Location: review_stocks.php"); // Redirect to the review page
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
