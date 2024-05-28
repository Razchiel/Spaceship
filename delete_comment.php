<?php
// Lakukan koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "pengunjung");

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

// Ambil email komentar yang akan dihapus
$email = $_GET['email'];

// Query untuk menghapus komentar dari database
$query = "DELETE FROM data_pengunjung WHERE email='$email'";
mysqli_query($koneksi, $query);

// Redirect ke halaman comment.php setelah berhasil menghapus komentar
header("Location: comment.php");
exit;
?>
