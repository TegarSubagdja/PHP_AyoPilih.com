<?php
// Membuat koneksi ke database
$servername = "localhost";
$username = "id20790333_ayopemilihanrukuns";
$password = "Pasti-151002";
$dbname = "id20790333_ayopemilihanrukun";

$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi database
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Fungsi untuk menghitung suara pada setiap kandidat
function hitungSuara($conn, $kandidat)
{
    $sql = "SELECT COUNT(*) AS jumlah_suara FROM data_pemilih WHERE kandidat = '$kandidat'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['jumlah_suara'];
    } else {
        return 0;
    }
}

// Menggunakan fungsi hitungSuara untuk menghitung suara setiap kandidat
$jumlahSuaraRockyGerung = hitungSuara($conn, "1");
$jumlahSuaraMahfudMD = hitungSuara($conn, "2");
$jumlahSuaraFahriHamzah = hitungSuara($conn, "3");
// Menutup koneksi database
$conn->close();
