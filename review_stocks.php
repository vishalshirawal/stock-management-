<?php
include 'db.php'; // Include the database connection script

// SQL Query to fetch all stocks
$sql = "SELECT * FROM stocks ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Stocks</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>📝 Review Stocks</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">🏠 Home</a></li>
            <li><a href="add_stock.html">➕ Add Stock</a></li>
            <li><a href="review_stocks.php">📝 Review Stocks</a></li>
        </ul>
    </nav>
    <main>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Stock Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Date Added</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['price']}</td>
                                <td>{$row['quantity']}</td>
                                <td>{$row['created_at']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No stocks found. Add some stocks to get started!</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>
