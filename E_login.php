<?php
$koneksi = mysqli_connect("localhost", "id20790333_ayopemilihanrukuns", "Pasti-151002", "id20790333_ayopemilihanrukun");

if (mysqli_connect_errno()) {
    echo "Konesi database gagal : " . mysqli_connect_errno();
}

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data pada tabel admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "SELECT * FROM user_admin WHERE username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    echo "<script> alert ('Login berhasil...'); 
    window.location.href = 'D_hasil.php';
    </script>";
} else {
    echo "<script> alert ('login gagal ! username dan password tidak benar ');
    location.reload();
    </script>";
}
