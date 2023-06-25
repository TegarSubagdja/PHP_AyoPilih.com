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
                    <a class="nav-link text-white" href="D_hasil.php">Hasil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#candidates">Masukan</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-warning text-white" href="index.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="hero d-flex align-items-center bg-warning">
        <div class="container mt-5 mb-5">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-white">
                    <h2 class="font-weight-bold">MASUKAN DARI PENGGUNA</h2>
                    <p>Berikut adalah masukan dari pengguna mengenai yang dapat dijadikan evaluasi untuk membuat sistem menjadi lebih baik.</p>
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
            <h2>Tabel Masukan</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>Masukan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'E_masukan.php'; ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
