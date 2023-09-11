<?php

// Konfigurasi database
define ('DB_HOST','localhost'); // host database
define ('DB_USER','root'); // username database
define ('DB_PASSWORD',''); // password database
define ('DB_NAME','crud'); // nama database

// Membuat koneksi ke database MySQL
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

// Memeriksa koneksi ke database
if (!$connection)
{
  die("Connection error: " . mysqli_connect_error());
}

?>