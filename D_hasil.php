<?php include 'E_count.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemilihan RT - Admin</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .card-img-top {
      width: 150px;
      object-fit: cover;
    }
  </style>
  <!-- Google Fonts - Poppins -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <a class="navbar-brand text-white" href="#">AyoPilih.com</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Hasil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="D_masukan.php">Masukan</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-warning text-dark" href="index.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <section class="hero d-flex align-items-center bg-warning">
    <div class="container mt-5 mb-5">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-white">
          <h2 class="font-weight-bold">HASIL PEROLEHAN SUARA</h2>
          <p>Berikut adalah hasil perolehan suara sementara dari pemilihan RT.
            Harap dicatat bahwa perolehan suara dapat berubah sewaktu-waktu seiring dengan pemungutan suara yang sedang
            berlangsung.
            alam halaman ini, Anda dapat melihat jumlah suara yang telah diperoleh oleh setiap kandidat.</p>
          <form action="#" class="form-search d-flex align-items-stretch mb-3">
            <input type="text" class="form-control" placeholder="Masukan Kata Kunci">
            <button type="submit" class="btn btn-primary">Search</button>
          </form>

        </div>

      </div>
    </div>
  </section>

  <section id="candidates" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center">Pendapatan Suara</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card mt-4">
            <div class="card-body">
              <h5 class="card-title">Rocky Gerung</h5>
              <div class="d-flex justify-content-center p-5">
                <img src="Assets/kandidat1.jpg" class="card-img-top" alt="Foto Kandidat 3">
              </div>
              <p class="card-text">Jumlah Suara: <span class="font-weight-bold bg-warning rounded pl-2 pr-2"><?php echo $jumlahSuaraRockyGerung; ?></span></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mt-4">
            <div class="card-body">
              <h5 class="card-title">Mahfud MD</h5>
              <div class="d-flex justify-content-center p-5">
                <img src="Assets/kandidat2.jpg" class="card-img-top" alt="Foto Kandidat 3">
              </div>
              <p class="card-text">Jumlah Suara: <span class="font-weight-bold bg-warning rounded pl-2 pr-2"><?php echo $jumlahSuaraMahfudMD; ?></span></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mt-4">
            <div class="card-body">
              <h5 class="card-title">Fahri Hamzah</h5>
              <div class="d-flex justify-content-center p-5">
                <img src="Assets/kandidat3.jpg" class="card-img-top" alt="Foto Kandidat 3">
              </div>
              <p class="card-text">Jumlah Suara: <span class="font-weight-bold bg-warning rounded pl-2 pr-2"><?php echo $jumlahSuaraFahriHamzah; ?></span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="counttable" class="py-5">
    <div class="container">
      <h2 class="text-center">Data Pemilih</h2>
      <div class="table-responsive mt-4">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nomor KTP</th>
              <th>Nama</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Pilihan</th>
            </tr>
          </thead>
          <tbody>
            <?php include 'E_pemilih.php'; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
