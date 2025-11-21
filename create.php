<?php include 'db.php';?>

<h2>Add user</h2>
<form method="POST">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <button type="submit" name="save">Save</button>
</form>
  
<?php
if(isset($_POST['save'])){
    $name= $_POST['name'];
    $email= $_POST['email'];

  $sql="INSERT INTO users (name, email) VALUES ('$name','$email')";
if ($conn->query($sql)) {
    echo "user added successfully";
} else {
    echo "Error: " . $conn->error;
}
}