<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menambahkan User</title>
</head>
<body>
  <h2>Menambahkan User</h2>
  <form method="post" action="processing.php">
    <label>First Name:</label>
    <input type="text" name="first_name" required><br><br>
    <label>Last Name:</label>
    <input type="text" name="last_name" required><br><br>    
    <label>Email:</label>
    <input type="email" name="email" required><br><br>
    <button type="submit" name="add">Add User</button>
  </form>
</body>
</html>