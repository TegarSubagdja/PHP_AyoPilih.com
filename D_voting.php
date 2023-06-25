<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan RT - Voting</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <!-- Google Fonts - Poppins -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <a class="navbar-brand text-white font-weight-bold" href="#">AyoPilih.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">Kandidat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="D_voting.php">Voting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-warning" href="D_login.php">Admin</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mb-5">
        <h1 class="text-center font-weight-bold mt-5 mb-5">HALAMAN VOTING</h1>
        <div class="row">
            <div class="col-md-5 p-5 mb-3 bg-warning rounded">
                <img id="kandidatImage" src="../Assets/pemilihan.jpg" alt="Foto Kandidat" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <form action="E_input.php" method="POST">
                    <div class="form-group">
                        <label for="ktp">Nomor KTP</label>
                        <input type="text" class="form-control" id="ktp" name="ktp" placeholder="Masukkan nomor KTP" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="tempatLahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Masukkan tempat lahir Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggalLahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" required>
                    </div>
                    <div class="form-group">
                        <label for="kandidat">Pilih Kandidat</label>
                        <select class="form-control" id="kandidat" name="kandidat" onchange="changeKandidat()">
                            <option value="1">Kandidat 1</option>
                            <option value="2">Kandidat 2</option>
                            <option value="3">Kandidat 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <canvas id="signatureCanvas" width="535px" height="200" style="border: 1px solid black;"></canvas>
                        <div class="tombol">
                            <label for="signature" style="margin-top: 10px;">Tanda Tangan</label>
                            <div style="margin-top: 10px;">
                                <button type="button" id="btnClear" class="btn btn-secondary">Hapus Tanda
                                    Tangan</button>
                                <button type="submit" id="btnSubmit" class="btn btn-warning">Kirim</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- SignaturePad JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
    <script>
        // Inisialisasi SignaturePad
        var canvas = document.getElementById('signatureCanvas');
        var signaturePad = new SignaturePad(canvas);

        // Fungsi untuk menghapus tanda tangan
        function clearSignature() {
            signaturePad.clear();
        }

        // Fungsi untuk mendapatkan gambar tanda tangan dalam format base64
        function getSignatureImage() {
            if (signaturePad.isEmpty()) {
                alert('Tanda tangan tidak boleh kosong.');
            }
        }

        // Menghubungkan tombol hapus dengan fungsi clearSignature()
        document.getElementById('btnClear').addEventListener('click', clearSignature);

        // Menghubungkan tombol kirim dengan fungsi getSignatureImage()
        document.getElementById('btnSubmit').addEventListener('click', getSignatureImage);

        // Fungsi untuk mengubah gambar dan data sesuai dengan kandidat yang dipilih
        function changeKandidat() {
            var kandidat = document.getElementById('kandidat').value;
            var imgSrc = 'Assets/kandidat' + kandidat + '.jpg'; // Ganti dengan sumber gambar kandidat yang sesuai

            document.getElementById('kandidatImage').src = imgSrc;
        }
    </script>
</body>

</html>
