<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oho";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<form method="GET">
  <h1>Sign Up Form</h1>

  <label for="user"><b>Username:</b></label><br>
  <input type="text" name="user" id="user" value=""><br><br>

  <label for="pass"><b>Password:</b></label><br>
  <input type="password" name="pass" id="pass" value=""><br><br>

  <input type="submit" name="submit" value="Submit">
</form>


<?php
if (isset($_GET['submit'])) {
    $user = $_GET['user'];
    $pass = $_GET['pass'];

    $query = "INSERT INTO account (user, pass) VALUES ('$user', '$pass')";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Data have been saved";
    } else {
        echo "Data are not saved";
    }
}
?>
