<?php include("config.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn Crud</title>
</head>
<body>
  <h2>CRUD EXAMPLE</h2>
  <a href="add.php"></a>
  <table border="1" cellpadding="10" cellspacing="0">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Email</th>
        <th>Actions</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody border="1" cellpadding="10">
      <?php
      
      // Mengambil data pengguna dari database
      $sql = "SELECT * FROM users";
      $hasil = mysqli_query($connection, $sql);

      if (mysqli_num_rows($hasil) > 0)
      {
        while ($row = mysqli_fetch_assoc($hasil)) 
        {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['first_name'] . "</td>";
          echo "<td>" . $row['last_name'] . "</td>";          
          echo "<td>" . $row['email'] . "</td>";
          echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
          echo "</tr>";
          
        }
      } 
      else 
      {
        echo "<tr><td colspan='5'>No records found.</td></tr>";
      }
      
      ?>
    </tbody>
  </table>
</body>
</html>
