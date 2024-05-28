<?php
// Lakukan koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "pengunjung");

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan dari formulir
    $email = $_POST['email'];
    $nama = $_POST['name'];
    $nomorhp = $_POST['phone'];
    $komentar = $_POST['message'];
    $submit = $_POST['submit'];

    // Perbarui data di database
    $query = "UPDATE data_pengunjung SET nama='$nama', nomorhp='$nomorhp', komentar='$komentar', submit='$submit' WHERE email='$email'";
    mysqli_query($koneksi, $query);

    // Redirect ke halaman comment.php setelah berhasil melakukan edit
    header("Location: comment.php");
    exit;
} else {
    // Jika tidak ada data POST, tampilkan formulir untuk mengedit data
    $email = $_GET['email'];

    // Query untuk mendapatkan data pengunjung berdasarkan email
    $result = mysqli_query($koneksi, "SELECT * FROM data_pengunjung WHERE email='$email'");
    $comment_data = mysqli_fetch_assoc($result);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>About</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>
<body>
    <!-- Tampilkan formulir untuk mengedit -->
    <form method="post">
    <input type="hidden" name="email" value="<?php echo $comment_data['email']; ?>">
        <input type="text" name="name" value="<?php echo $comment_data['nama']; ?>" placeholder="Nama">
        <input type="text" name="phone" value="<?php echo $comment_data['nomorhp']; ?>" placeholder="Nomor HP">
        <input type="text" name="message" value="<?php echo $comment_data['komentar']; ?>" placeholder="Komentar">
        <input type="text" name="submit" value="<?php echo $comment_data['submit']; ?>" placeholder="Submit">
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
