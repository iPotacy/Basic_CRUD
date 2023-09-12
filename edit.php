<?php 

include("config.php"); 

// Memeriksa apakah parameter 'id' ada dalam URL
if (isset($_GET['id'])) 
{
  $id = $_GET['id'];
  // Query untuk mengambil data pengguna berdasarkan ID
  $sql = "SELECT * FROM users WHERE id = $id";
  $hasil = mysqli_query($connection, $sql);
  $row = mysqli_fetch_array($hasil);
}
else 
{
  // Jika tidak ada 'id' dalam URL, kembalikan ke halaman utama
  header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit users</title>
</head>
<body>
  <h2>Edit User</h2>
  <form method="post" action="process.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label>First Name:</label>
    <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" required><br><br>
    <label>Last Name:</label>
    <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" required><br><br>
    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
    <button type="submit" name="edit">Edit User</button>
  </form>
</body>
</html>