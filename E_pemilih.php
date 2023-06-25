<?php
// Membuat koneksi ke database
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi database
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Mengambil data dari tabel pemilih
$sql = "SELECT * FROM data_pemilih";
$result = $conn->query($sql);

// Menampilkan data pemilih
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['nomor_ktp'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['tempat_lahir'] . "</td>";
        echo "<td>" . $row['tanggal_lahir'] . "</td>";
        echo "<td>" . $row['kandidat'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>Tidak ada data pemilih.</td></tr>";
}

// Menutup koneksi database
$conn->close();
