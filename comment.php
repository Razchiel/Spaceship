

<?php
// comment.php
date_default_timezone_set("Asia/Bangkok");

// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "pengunjung");

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
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
      <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      <div class="header_main">
         <div class="mobile_menu">

         <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo_mobile"><a href="index.html"><img src="images/logo 4 (3).png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                  <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " href="contact.php">Contact</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
         <div class="container-fluid">
            <div class="logo"><a href="index.php"><img src="images/image2.png"></a></div>
            <div class="menu_main">
               <ul>
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                  <li><a href="contact.php">Contact us</a></li>
                  <li><a href="comment.php">Comment</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>

<table>
   <tr>
      <th>Nama</th>
      <th>Email</th>
      <th>Nomor HP</th>
      <th>Komentar</th>
      <th>Submit</th>
   </tr>
<?php
// mengambil data dari tabel data_pengunjung dalam database menggunakan fungsi mysqli_query.
// Data diambil menggunakan query SQL SELECT * FROM data_pengunjung.
// Hasil dari query disimpan dalam variabel $ambildata.

$ambildata = mysqli_query($koneksi, "SELECT * FROM data_pengunjung");
while ($tampil = mysqli_fetch_array($ambildata)) {
   echo "
   <tr>
       <td>$tampil[nama]</td>
       <td>$tampil[email]</td>
       <td>$tampil[nomorhp]</td>
       <td>$tampil[komentar]</td>
       <td>$tampil[submit]</td>
       <td><a href='edit_comment.php?email=$tampil[email]'>Edit</a></td>
       <td><a href='delete_comment.php?email=$tampil[email]'>Hapus</a></td>
   </tr>";
}

// perulangan while gunakan untuk menampilkan setiap baris data ke dalam tabel HTML.
// Setiap kali iterasi, data dari baris saat ini disimpan dalam array asosiatif $tampil.
// Nilai dari masing-masing kolom diambil dari array tersebut dan ditampilkan
?>


</table>

</html>


