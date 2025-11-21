<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "oho";

// Database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Agar connection fail ho jaye
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<form method="GET">
    <h1>LOGIN FORM</h1>
    Username: <input type="text" name="user" value=""> <br><br>
    Password: <input type="password" name="pass" value=""> <br><br>
    <input type="submit" name="submit" value="Login">
</form>

<?php
if (isset($_GET['submit'])) {
    $user = $_GET['user'];
    $pass = $_GET['pass'];

    $query = "SELECT * FROM account WHERE user='$user' AND pass='$pass'";
    $data  = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);

    if ($total == 1) {
        header('Location: index.html');
    } else {
        echo "failed";
    }
}
?>
