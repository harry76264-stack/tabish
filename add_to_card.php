<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "oho"; // apna database naam yahan likh

// Database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<form method="POST">
    <h1>Add to Card Form</h1>

    Product Name: <input type="text" name="product_name" required><br><br>
    Quantity: <input type="number" name="quantity" required><br><br>
    Price: <input type="text" name="price" required><br><br>

    <input type="submit" name="submit" value="Add Product">
</form>

<?php
if (isset($_POST['submit'])) {
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $query = "INSERT INTO add_to_card (product_name, quantity, price)
              VALUES ('$product_name', '$quantity', '$price')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<p style='color:green;'>✅ Product added successfully!</p>";
    } else {
        echo "<p style='color:red;'>❌ Failed to add product.</p>";
    }
}
?>
