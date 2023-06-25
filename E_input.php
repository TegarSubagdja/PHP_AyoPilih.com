<?php
// Mengambil nilai input dari halaman voting
$nomorKTP = $_POST['ktp'];
$nama = $_POST['nama'];
$tempatLahir = $_POST['tempatLahir'];
$tanggalLahir = $_POST['tanggalLahir'];
$kandidat = $_POST['kandidat'];

// Melakukan koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rukuntetangga";

$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi database
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Mengecek apakah nomor_ktp sudah ada di database
$checkQuery = "SELECT * FROM data_pemilih WHERE nomor_ktp = '$nomorKTP'";
$checkResult = $conn->query($checkQuery);

if ($checkResult->num_rows > 0) {
    echo "<script>
        alert('Anda sudah memilih');
        window.location.href = 'D_beranda.php';
    </script>";
} else {
    // Membuat query untuk memasukkan data ke database
    $sql = "INSERT INTO data_pemilih (nomor_ktp, nama, tempat_lahir, tanggal_lahir, kandidat) VALUES ('$nomorKTP', '$nama', '$tempatLahir', '$tanggalLahir', '$kandidat')";

    // Menjalankan query
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Data berhasil disimpan ke database');
                window.location.href = 'D_beranda.php';
            </script>";
    } else {
        echo "<script>
                alert('Terjadi kesalahan: " . $conn->error . "');
                window.location.href = 'D_voting.php';
            </script>";
    }
}

// Menutup koneksi database
$conn->close();
