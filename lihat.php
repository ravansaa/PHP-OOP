<?php
// Koneksi ke database
include_once 'koneksi.php';

// Query untuk menampilkan data mahasiswa
$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
       <?php
  include 'koneksi.php';
  $query = "SELECT * FROM mahasiswa";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['nim'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['alamat'] . "</td>";
    echo "<td><a href='hapus.php?id=" . $row['nim'] . "'>Hapus</a></td>";
    echo "</tr>";
  }
     ?>
    </table>
</body>

</html>