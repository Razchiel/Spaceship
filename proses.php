<?php
//proses.php
$koneksi = mysqli_connect("localhost", "root", "", "pengunjung");

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

// Memastikan semua bidang yang diperlukan diisi sebelum memproses data
// Mmeriksa apakah data dikirimkan melalui metode POST dari formulir HTML dan tombol submit yang memiliki atribut name bernama "submit" ditekan.
// data yang dikirimkan dari formulir HTML diambil dan disimpan ke dalam variabel PHP.
if(isset($_POST['submit'])) {
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $nomorhp = $_POST['phone'];
    $komentar = $_POST['message'];
    $submit = $_POST['submit'];

    // Validasi apakah bidang yang diperlukan tidak kosong
    if(empty($nama) || empty($email) || empty($nomorhp) || empty($komentar) || empty($submit)) {
        echo "Semua bidang harus diisi.";
    } else {
        // Proses data jika semua bidang diisi
        // query SQL untuk menyisipkan data ke dalam tabel data_pengunjung.
        $query = "INSERT INTO data_pengunjung (nama, email, nomorhp, komentar, submit) VALUES ('$nama', '$email', '$nomorhp', '$komentar', '$submit')";

        if (mysqli_query($koneksi, $query)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }
    }
}

mysqli_close($koneksi);
?>

