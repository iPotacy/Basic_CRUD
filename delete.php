<?php 

include("config.php");

if (isset($_GET['id']))
{
  // Memeriksa apakah parameter 'id' ada dalam URL
  $id = $_GET['id'];
  // Query SQL untuk menghapus pengguna berdasarkan ID
  $sql = "DELETE FROM users WHERE id = $id";
  
  if (mysqli_query($connection, $sql)) 
  {
    // Jika berhasil menghapus pengguna, arahkan kembali ke halaman utama
    header("Location: index.php");
  }
  else
  {
    // Jika terjadi kesalahan, tampilkan pesan kesalahan
    echo "Error".mysqli_error($connection);
  }
}
else
{
  // Jika tidak ada 'id' dalam URL, kembalikan ke halaman utama
  header("Location: index.php");
}
?>