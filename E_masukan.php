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

// Mengambil data dari tabel pemilih
$sql = "SELECT * FROM masukan";
$result = $conn->query($sql);

// Menampilkan data pemilih
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['masukan'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>Tidak ada data pemilih.</td></tr>";
}

// Menutup koneksi database
$conn->close();
