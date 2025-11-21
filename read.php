<?php include 'db.php'; ?>

<h2> New users</h2>
<a href="create.php">Add New User</a>
<br><br>

<table border="1" cellpadding="5">
<tr>
    <th>ID</th><th>Name</th><th>Email</th><th>Actions</th>
</tr>

<?php
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['Email']."</td>
                <td>
                  <a href='update.php?id=".$row['id']."'>Edit</a> | 
                  <a href='delete.php?id=".$row['id']."'>Delete</a>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No users found</td></tr>";
}
?>
</table>
