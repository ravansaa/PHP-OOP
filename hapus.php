<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = "DELETE FROM mahasiswa WHERE nim = '$id'";
$result = mysqli_query($conn, $query);
if ($result) {
  header('location: http://localhost/lab5_php_oop/home');
} else {
  echo "Data tidak berhasil dihapus.";
}
