<?php 

include("config.php");

if (isset($_POST['add'])) 
{
    // Jika tombol "Add User" ditekan, ambil data dari formulir
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    // Query SQL untuk menambahkan pengguna baru ke dalam tabel "users"
    $sql = "INSERT INTO users (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
    
    // Eksekusi query SQL
    if (mysqli_query($connection, $sql)) 
    {
        // Jika berhasil, arahkan kembali ke halaman utama
        header("Location: index.php");
    } 
    else 
    {
        // Jika terjadi kesalahan, tampilkan pesan kesalahan
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
} 
elseif (isset($_POST['edit'])) {
    // Jika tombol "Edit User" ditekan, ambil data dari formulir
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    // Query SQL untuk mengedit data pengguna yang ada berdasarkan ID
    $sql = "UPDATE users SET first_name='$first_name', last_name='$last_name', email='$email' WHERE id=$id";

    // Eksekusi query SQL
    if (mysqli_query($connection, $sql)) 
    {
        // Jika berhasil, arahkan kembali ke halaman utama
        header("Location: index.php");
    } 
    else 
    {
        // Jika terjadi kesalahan, tampilkan pesan kesalahan
        echo "Error updating record: " . mysqli_error($connection);
    }
}

?>